<?php
include('session.php');
include('dbconnection.php'); // including database connection
$error=''; 
$orderId = null;
if (isset($_POST['placeorder']) && !empty($_SESSION['cart'])) {
    $userId = $userid; // Get this from session if login is implemented
    $shippingFullName = $fullname;

    $shippingAddress = $add;
    $shippingEmail = $useremail;
    $shippingPhone = $userphone;
    $mcbReference = isset($_POST['mcb_ref']) && !empty(trim($_POST['mcb_ref'])) 
    ? $conn->real_escape_string($_POST['mcb_ref']) 
    : null;
    $paymentMethod = $mcbReference ? 'MCB Juice' : 'Cash on Delivery';

    $totalAmount = 0;
    foreach ($_SESSION['cart'] as $item) {
        $totalAmount += $item['Price'] * $item['Quantity'];
    }

    // Insert into Order table
    $stmt = $conn->prepare("INSERT INTO `Orders` (UserID, MCBReference, ShippingFullName, ShippingAddress, ShippingEmail, ShippingPhoneNumber, TotalAmount, PaymentMethod) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssds", $userId, $mcbReference, $shippingFullName, $shippingAddress, $shippingEmail, $shippingPhone, $totalAmount, $paymentMethod);

    if ($stmt->execute()) {
        $orderId = $stmt->insert_id;

        // Insert into OrderItem table
        $stmtItem = $conn->prepare("INSERT INTO OrderItems (OrderID, ProductID, Quantity, UnitPrice) VALUES (?, ?, ?, ?)");
        foreach ($_SESSION['cart'] as $productId => $item) {
            $productId = (int)$productId;
            $quantity = (int)$item['Quantity'];
            $unitPrice = (float)$item['Price'];
            $stmtItem->bind_param("iiid", $orderId, $productId, $quantity, $unitPrice);
            $stmtItem->execute();
        }

        $orderMessage = "Hello,\n\n";
        $orderMessage .= "A new order has been placed by $fullname.\n\n";
        $orderMessage .= "📦 Order Details:\n";
        $orderMessage .= "Order ID: $orderId\n\n";
        $orderMessage .= "Items Ordered:\n";
        foreach ($_SESSION['cart'] as $item) {
            $orderMessage .= "- {$item['ProductName']} x{$item['Quantity']} @ Rs{$item['Price']}\n";
        }
        $orderMessage .= "\n💰 Total Amount: Rs" . number_format($totalAmount, 2) . "\n";
        $orderMessage .= "🧾 Payment Method: $paymentMethod\n";
        $orderMessage .= "🟡 MCB Reference: " . ($mcbReference ?? 'N/A') . "\n\n";
        $orderMessage .= "📍 Shipping Details:\n";
        $orderMessage .= "Name: $fullname\n";
        $orderMessage .= "Address: $add\n";
        $orderMessage .= "Phone: $userphone\n";
        $orderMessage .= "Email: $useremail\n\n";
        $orderMessage .= "Please prepare this order for dispatch.\n\n";
        $orderMessage .= "- Your Website System";

        $confirmationMessage = "Hi $shippingFullName,\n\n";
        $confirmationMessage .= "Thank you for shopping with us! We’ve received your order and it’s now being processed.\n\n";
        $confirmationMessage .= "🧾 Order Details:\n";
        $confirmationMessage .= "Order ID: $orderId\n";
        $confirmationMessage .= "Date: " . date("d M Y") . "\n\n";
        $confirmationMessage .= "Items Ordered:\n";

        foreach ($_SESSION['cart'] as $item) {
            $confirmationMessage .= "- {$item['ProductName']} x{$item['Quantity']} @ Rs{$item['Price']}\n";
        }

        $confirmationMessage .= "\n💰 Total Amount: Rs" . number_format($totalAmount, 2) . "\n";
        $confirmationMessage .= "💳 Payment Method: $paymentMethod\n";
        $confirmationMessage .= "🔢 MCB Reference: " . ($mcbReference ?: 'N/A') . "\n\n";
        $confirmationMessage .= "🚚 Shipping Information:\n";
        $confirmationMessage .= "Name: $shippingFullName\n";
        $confirmationMessage .= "Address: $shippingAddress\n";
        $confirmationMessage .= "Phone: $shippingPhone\n";
        $confirmationMessage .= "Email: $shippingEmail\n\n";
        $confirmationMessage .= "You will receive another email once your order has been dispatched.\n\n";
        $confirmationMessage .= "Thank you again for your purchase!\n\n";
        $confirmationMessage .= "Best regards,\nJJ Healthcare Ltd";

        // Clear cart
        unset($_SESSION['cart']);
        $error="<div id='login-error' class='alert alert-success' role='alert'>Order placed successfully!</div>";

    echo <<<HTML
    <!-- Load EmailJS SDK -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "ZgZY6B7ho6xuDWM5e",
        });
    })();
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    
        const templateParams = {
          subject: "🛒 New Order Received - Order #$orderId",
          message: `{$orderMessage}`,
          email: "sales@jjhealthcareltd.com"
        };
    
        emailjs.send("service_dxhosq8", "template_ffa1dcv", templateParams);
      });
    </script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
    
        const templateParams = {
          subject: "Order Confirmation - Order #$orderId",
          message: `{$confirmationMessage}`,
          email: "$shippingEmail"
        };
    
        emailjs.send("service_dxhosq8", "template_ffa1dcv", templateParams);
      });
    </script>
    HTML;

    } else {
        $error="<div  id='login-error' class='alert alert-danger' role='alert'>Error placing order</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Checkout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> 
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizer JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "ZgZY6B7ho6xuDWM5e",
        });
    })();
    </script>
</head>

<body>

<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

        <!-- Header Section Start -->
        <div class="header-section section">
       
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col">
    
                            <!-- Header Top Wrapper Start -->
                            <div class="header-top-wrapper">
                                <div class="row">
    
                                    <!-- Header Social -->
                                    <div class="header-social col-md-4 col-12">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
    
                                    <!-- Header Logo -->
                                    <div class="header-logo col-md-4 col-12">
                                        <a href="index.php" class="logo"><img src="img/logo-jj.png" alt="logo" style="width: 113px; height: 132px;"></a>
                                    </div>
    
                                    <!-- Account Menu -->
                                    <div class="account-menu col-md-4 col-12">
                                    <ul>
                                        <?php
                                        if(!empty($login_session)){
                                            echo "<li><a href='myaccount.php'>My Account</a></li>";
                                        }
                                        else{
                                           echo "<li><a href='login.php'>Login</a></li>"; 
                                        }
                                        ?>
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span id="card-count" class="num"><?php echo isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'Quantity')) : 0; ?></span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <div id="mini-cart">
                                                <?php include("mini-cart-preview.php") ?>
                                                </div>
                                                                                             
                                                <!-- Cart Button -->
                                                <div class="cart-bottom  clearfix">
                                                    <a href="checkout.php">Check out</a>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
    
                                </div>
                            </div><!-- Header Top Wrapper End -->
    
                        </div>
                    </div>
                </div>
            </div><!-- Header Top End -->
            
            <!-- Header Bottom Start -->
            <div class="header-bottom section">
                <div class="container">
                    <div class="row">
                       
                        <!-- Header Bottom Wrapper Start -->
                        <div class="header-bottom-wrapper text-center col">
    
                            <!-- Header Bottom Logo -->
                            <div class="header-bottom-logo">
                                <a href="index.php" class="logo"><img src="img/logo-jj.png" alt="logo"></a>
                            </div>
    
                            <!-- Main Menu -->
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li><a href="index.php">home</a></li>
                                    <li><a href="#">Our Brands</a>
                                        <ul class="sub-menu">
                                            <li><a href="prohall.php?category1=8&category2=9">Prohall</a></li>
                                            <li><a href="amaeyya.php?category1=1">Amaeyya</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">About</a></li>
                                    <!-- <li><a href="blog.html">Blogs</a></li> -->
                                    <li><a href="contact.php">contact</a></li>
                                </ul>
                            </nav>
    
                            <!-- Header Search -->
                            <div class="header-search">
                                
                                <!-- Search Toggle -->
                                <button class="search-toggle"><i class="ion-ios-search-strong"></i></button>
                                
                                <!-- Search Form -->
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                                
                            </div>
                            
                            <!-- Mobile Menu -->
                            <div class="mobile-menu section d-md-none"></div>
    
                        </div><!-- Header Bottom Wrapper End -->
                        
                    </div>
                </div>
            </div><!-- Header Bottom End -->
            
        </div><!-- Header Section End -->
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>Checkout</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->

    <!-- Checkout Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <?php echo $error;?>
            <div class="row">
                <?php
                if (!isset($login_session)) {
                    echo "<p class='section-title text-center col mb-60' style='font-weight: 600 !important;'>Please <a style='color: #007bff !important;' href='login.php?redirect=checkout.php'>log in</a> to place your order.</p>";
                }
                else {?>
                    
            <div class="col-lg-6 col-12 mb-30">
                   
                   <!-- Checkout Accordion Start -->
                   <div id="checkout-accordion" class="panel-group">
                       
                       <!-- Shipping Method -->
                       <div class="panel single-accordion">
                           <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-method">1. shipping informatioon</a>
                           <div id="shipping-method" class="collapse show">
                               <div class="accordion-body shipping-method fix">
                                  
                                   <h5>shipping address</h5>
                                   <p><span>Fullname&nbsp;</span><?php echo $fullname ?></p>
                                   <p><span>address&nbsp;</span><?php echo $add ?></p>
                                   <p>** You can modify your address <a style='color: #007bff !important;' href="myaccount.php">here</a>.</p>
                                   
                               </div>
                           </div>
                       </div>
                       
                       <!-- Payment Method -->
                       <div class="panel single-accordion">
                           <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">2. Payment method</a>
                           <div id="payment-method" class="collapse">
                               <div class="accordion-body payment-method fix">
                                  
                                   <ul class="payment-method-list">
                                       <li class="active payment-option" data-method="cod">Cash on Delivery</li>
                                       <li class="payment-form-toggle payment-option" data-method="mcb">MCB Juice</li>
                                   </ul>

                                   <div class="payment-form"><img src="img/jj-juice.jpg"/></div>
                               
                               </div>
                           </div>
                       </div>
                       
                   </div><!-- Checkout Accordion Start -->
                   
               </div>
                <!-- Order Details -->
                <div class="col-lg-6 col-12 mb-30">
                <form method="post" id="orderForm">
                    <div class="order-details-wrapper">
                        <h2>your order</h2>
                        <div class="order-details">
                                <ul>
                                <li><p class="strong">product</p><p class="strong">total</p></li>
                                <?php 
                                    if (!empty($_SESSION['cart'])) {
                                        $total = 0;
                                        foreach ($_SESSION['cart'] as $product_id => $item) {
                                            $subtotal = $item['Price'] * $item['Quantity'];
                                            $total += $subtotal;
                                            echo '<li><p>'.$item['ProductName'].' x'. $item['Quantity'].' - Rs'. $item['Price'].'</p><p>Rs'.$subtotal.'</p></li>';
                                        }
                                        echo '<li><p class="strong">order total</p><p style="font-weight: 600;">Rs'.$total.'</p></li>';
                                        echo '<li id="mcb-reference" style="display: none;"><p class="strong">MCB Juice Reference</p><input type="text" name="mcb_ref" id="mcb-ref" placeholder="Reference No." /></li>';
                                    } else {
                                        echo "<p>Your cart is empty.</p>";
                                    }
                                ?>
                                    <li><input type="submit" id="placeorder" name="placeorder" class="button" value="Place Order"></li>
                                </ul>
                        </div>
                    </div>
                </form>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div><!-- Checkout Section End-->

    <?php include('footer-section.php') ?>

</div><!-- Main Wrapper End -->



<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS -->
<script src="js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
<script>
$(document).ready(function() {
    $('.payment-option').click(function() {
        $('.payment-option').removeClass('active');
        $(this).addClass('active');

        const method = $(this).data('method');

        if (method === 'mcb') {
            $('#mcb-reference').show();
            $('#mcb-ref').prop('required', true);
        } else {
            $('#mcb-reference').hide();
            $('#mcb-ref').prop('required', false);
        }
    });
});
</script>
<script>
    // Wait for the DOM to load
    document.addEventListener("DOMContentLoaded", function () {
        const errorDiv = document.getElementById("login-error");
        if (errorDiv) {
            setTimeout(() => {
                errorDiv.style.display = "none";
            }, 5000); // 5000ms = 5 seconds
        }
    });
</script>
</body>


</html>