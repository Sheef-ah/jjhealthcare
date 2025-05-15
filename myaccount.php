<?php
include('session.php');
include('dbconnection.php'); // including database connection
$error=''; 
if (isset($_POST['save'])) {
    // Define and sanitize input
    $street = trim($_POST['street']);
    $apartment = trim($_POST['apartment']);
    $city = trim($_POST['city']);
    $country = trim($_POST['country']);
    $zipcode = trim($_POST['zipcode']);
    $phonenumber = trim($_POST['phonenumber']);

    $stmt = $conn->prepare("SELECT AddressID FROM Addresses WHERE UserID = ?");
    $stmt->bind_param("i", $row['UserID']);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->num_rows;

    if ($rows == 1) {
        // Update existing address
        $address = $result->fetch_assoc();
        $addressID = $address['AddressID'];

        $stmt = $conn->prepare("UPDATE Addresses 
                                SET Street = ?, City = ?, Apartment = ?, ZipCode = ?, Country = ?, PhoneNumber = ? 
                                WHERE AddressID = ?");
        $stmt->bind_param("ssssssi", $street, $city, $apartment, $zipcode, $country, $phonenumber, $addressID);
        if ($stmt->execute()) {
            $error="<div id='login-error' class='alert alert-success' role='alert'>
            Changes Saved !</div>";
        } else {
            $error="<div  id='login-error' class='alert alert-danger' role='alert'>
            Error while saving changes !</div>";
        }
    } else {

        $stmt = $conn->prepare("INSERT INTO Addresses 
            (UserID, Street, City, Apartment, ZipCode, Country, PhoneNumber)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssss", $row['UserID'], $street, $city, $apartment, $zipcode, $country, $phonenumber);
        if ($stmt->execute()) {
            $error="<div id='login-error' class='alert alert-success' role='alert'>
            Changes Saved !</div>";
        } else {
            $error="<div id='login-error' class='alert alert-danger' role='alert'>
            Error while saving changes !</div>";
        }
    }

    $stmt->close();
    $conn->close();
}

if (isset($_POST['savepassword'])) {
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    // Assume $user is defined from session or login
    $stmt = $conn->prepare("SELECT Password FROM users WHERE Userid = ?");
    $stmt->bind_param("i", $row['UserID']); // assuming $user is an integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $rw = $result->fetch_assoc();
        $dbpassword = $rw['Password'];

        if ($oldpassword === $dbpassword) { // Plain text comparison – use hashing in real apps
            if ($newpassword === $confirmpassword) {
                $stmt = $conn->prepare("UPDATE users SET Password = ? WHERE Userid = ?");
                $stmt->bind_param("si", $newpassword, $row['UserID']);
                $stmt->execute();

                session_destroy();
                header('Location: login.php');
                exit();
            } else {
                $error = "<div id='login-error' class='alert alert-danger' role='alert'>New password doesn't match!</div>";
            }
        } else {
            $error = "<div id='login-error' class='alert alert-danger' role='alert'>Old password doesn't match!</div>";
        }
    } else {
        $error = "<div id='login-error' class='alert alert-danger' role='alert'>User not found!</div>";
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
    <title>JJHEALTHCARE - My Account</title>
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
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="num">2</span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <div class="all-cart-product clearfix">
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.html"><img src="img/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.html">Holiday Candle</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.html"><img src="img/cart/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.html">Christmas Tree</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cart Total -->
                                                <div class="cart-totals">
                                                    <h5>Total <span>£12.00</span></h5>
                                                </div>
                                                <!-- Cart Button -->
                                                <div class="cart-bottom  clearfix">
                                                    <a href="checkout.html">Check out</a>
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
                                        <li><a href="#">Prohall (coming soon)</a></li>
                                        <li><a href="#">Amaeyya (coming soon)</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <!-- <li><a href="blog.html">Blogs</a></li> -->
                                <li><a href="contact.html">contact</a></li>
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
                    <h1>My Account</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->

        <!-- Checkout Section Start-->
        <div class="cart-section section pt-120 pb-90">
        
        <div class="container">
        <a class="input-box col-12 mb-20" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        <?php
                                        echo $error; 
                                     ?>
            <div class="row">
               
                <div class="col-lg-6 col-12 mb-30">
                   
                    <!-- Checkout Accordion Start -->
                    <div id="checkout-accordion" class="panel-group">
                    
                        <!-- Billing Method -->
                        <div class="panel single-accordion">
                            <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">Delivery information</a>
                            <div id="billing-method" class="collapse show">
                                <div class="accordion-body billing-method fix">

                                <h5>Shipping Address</h5>
                                    <p><span>Current Address: </span><?php echo $add ?></p>
                                   
                                    <form action="#" class="billing-form checkout-form" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="text" value="<?php echo $row['FirstName'] ?>" placeholder="First Name" disabled>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">								
                                                <input type="text" value="<?php echo $row['LastName'] ?>" placeholder="Last Name" disabled>
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Street address" id="street" name="street" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" id="apartment" name="apartment" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Town / City" id="city" name="city" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="text" id="country" name="country" placeholder="Country">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input placeholder="Postcode / Zip" id="zipcode" name="zipcode" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="email" value="<?php echo $row['Email'] ?>" placeholder="Email Address" disabled>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input placeholder="Phone Number" id="phonenumber" name="phonenumber" type="text">
                                            </div>
                                            <div class="checkout-login-form">
                                                <div class="input-box col-md-6 col-12 mb-20"><input type="submit" id="save" name="save" value="Save"></div>
                                            </div>					
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="panel single-accordion">
                            <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#password">Change password</a>
                            <div id="password" class="collapse show">
                                <div class="accordion-body billing-method fix">
                                   
                                    <form action="#" class="billing-form checkout-form" method="post">
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <input placeholder="Old Password" id="oldpassword" name="oldpassword" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="New Password" id="newpassword" name="newpassword" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Confirm New Password" id="confirmpassword" name="confirmpassword" type="text">
                                            </div>
                                            <div class="checkout-login-form">
                                                <div class="input-box col-md-6 col-12 mb-20"><input type="submit" id="savepassword" name="savepassword" value="Save"></div>
                                            </div>					
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- Checkout Accordion Start -->
                    
                </div>
                
                <!-- Order Details -->
                <div class="col-lg-6 col-12 mb-30">
                   
                    <div class="order-details-wrapper">
                        <h2>your order History</h2>
                        <div class="order-details">
                            <form action="#">
                            <table class="table">
                            
                            <!-- Table Head -->
                            <thead>
                                <tr>
                                    <th class="name">Order ID</th>
                                    <th class="name">Date</th>
                                    <th class="name">Product</th>
                                    <th class="name">Quantity</th>
                                    <th class="total">Total</th>
                                </tr>
                            </thead>
                            
                            <!-- Table Body -->
                            <tbody>
                                <tr>
                                    <td><span class="cart-number">1</span></td>
                                    <td><span class="cart-number">30/04/2025</span></td>
                                    <td><a href="#" class="cart-pro-title">Holiday Candle</a></td>
                                    <td><div class="">2</div></td>
                                    <td><p class="cart-price-total">$104.99</p></td>
                                </tr>
                                <tr>
                                    <td><span class="cart-number">2</span></td>
                                    <td><span class="cart-number">30/04/2025</span></td>
                                    <td><a href="#" class="cart-pro-title">Christmas Tree</a></td>
                                    <td><div class="">3</div></td>
                                    <td><p class="cart-price-total">$85.99</p></td>
                                </tr>
                                <tr>
                                    <td><span class="cart-number">1</span></td>
                                    <td><span class="cart-number">30/04/2025</span></td>
                                    <td><a href="#" class="cart-pro-title">Holiday Candle</a></td>
                                    <td><div class="">2</div></td>
                                    <td><p class="cart-price-total">$104.99</p></td>
                                </tr>
                                <tr>
                                    <td><span class="cart-number">2</span></td>
                                    <td><span class="cart-number">30/04/2025</span></td>
                                    <td><a href="#" class="cart-pro-title">Christmas Tree</a></td>
                                    <td><div class="">3</div></td>
                                    <td><p class="cart-price-total">$85.99</p></td>
                                </tr>
                            </tbody>
                        </table>
                            </form>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div><!-- Checkout Section End-->

       
    <!-- Footer Section Start-->
    <div class="footer-section section bg-dark">
        <div class="container">
            
            <div class="row">
                <div class="col">

                    <!-- Footer Top Start -->
                    <div class="footer-top section pt-80 pb-50">
                        <div class="row">

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">

                                <img class="footer-logo" src="img/logo-jj.png" alt="logo" style="width: 113px; height: 132px;">
                                <p>we believe that true beauty begins with nature. That’s why we are proud to bring the finest organic and natural cosmetic products to the people of Mauritius. Our mission is simple — to connect you with premium beauty solutions that prioritize your health, the environment, and exceptional results.</p>

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-2 col-md-3 col-12 mb-40">

                                <h4 class="widget-title">Information</h4>

                                <ul>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="useful-links.html">Useful Links</a></li>
                                    <li><a href="authorize-reseller.html">Authorized Resellers</a></li>
                                    <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>  

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-2 col-md-3 col-12 mb-40">

                                <h4 class="widget-title">Our Brands</h4>

                                <ul>
                                    <li><a href="#">Prohall</a></li>
                                    <li><a href="#">Amaeyya</a></li>
                                </ul>  

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">

                                <h4 class="widget-title">Contact Us</h4>

                                <ul>
                                    <li><span>Address:</span> J & J Healthcare Ltd, SSR Avenue, Phoenix</li>
                                    <li><span>Phone:</span> + 230 5 943 4000</li>
                                    <li><span>Email:</span> info@jjhealthcareltd.com</li>
                                </ul>  

                            </div>

                        </div>
                    </div><!-- Footer Top End -->
                    
                    <!-- Footer Bottom Start -->
                    <div class="footer-bottom section text-center">
                        <p><a href="#">JJHEALTHCARE</a></p>
                    </div><!-- Footer Bottom End -->

                </div>
            </div>
            
        </div>
    </div><!-- Footer Section End-->
    

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