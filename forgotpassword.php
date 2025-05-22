<?php
include('session.php');
include('dbconnection.php'); // Make sure this uses mysqli

$error = '';

function generateRandomText($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomText = '';
    for ($i = 0; $i < $length; $i++) {
        $randomText .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomText;
}

if (isset($_POST['submit'])) {
    $emailaddress = $_POST['email'];
    $newPasswordPlain = generateRandomText(10);

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE users SET Password = ? WHERE Email = ?");
    $stmt->bind_param("ss", $newPasswordPlain, $emailaddress);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            $error = "";
        } else {
            $error = "<div id='login-error' class='alert alert-danger' role='alert'>
                      Email address not found! </div>";
        }
    } else {
        $error = "<div id='login-error' class='alert alert-danger' role='alert'>
                  Database error! </div>";
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
    <title>JJHEALTHCARE - Forget Password</title>
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
                                        <li><a href="prohall.php?category1=8&category2=9">Prohall</a></li>
                                        <li><a href="#">Amaeyya (coming soon)</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
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
                    <h1>Forget Password</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->


        <!-- Checkout Section Start-->
        <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div style="display: flex; justify-content:center;">
               
                <div class="col-lg-6 col-12 mb-30">
                   
                    <!-- Checkout Accordion Start -->
                    <div id="checkout-accordion" class="panel-group">
                       
                        <!-- Checkout Method -->
                        <div class="panel single-accordion">
                            
                            <div id="checkout-method" class="collapse show">
                                <div class="checkout-method accordion-body fix">
                                <?php
                                    echo $error; 
                                ?>
                                <div id="success"></div>
                                <p>Please enter the same email address you registered in the website and we will send you a new password via mail. Thank you.</p>
                                    <form action="#" class="checkout-login-form" method="post" id="resetpassword">
                                        <div class="row">
                                            <div class="input-box col-12 mb-20"><input type="email" id="email" name="email" value="" placeholder="Email Address" required></div>
                                            <div class="input-box col-12 mb-20"><input type="submit" value="Submit" name="submit"></div>
                                        </div>
                                    </form>                              
                                </div>
                            </div>
                            
                        </div>
                        
                    </div><!-- Checkout Accordion Start -->
                    
                </div>
                
            </div>
        </div>
    </div>

       
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
                                    <li><a href="faq.html">FAQ's</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
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
<?php if (!empty($newPasswordPlain)): ?>

<script>
document.getElementById("resetpassword").addEventListener("submit", function(event) {
    event.preventDefault();

    var templateParams = {
        subject: 'Reset Password',
        message: 'Here is your new password: <?php echo $newPasswordPlain; ?>. Please log in and change your password. Thank You.',
        email: document.getElementById("email").value
    };

    emailjs.send("service_dxhosq8", "template_ffa1dcv", templateParams)
    .then(
        function(response) {
            document.getElementById("success").innerHTML = 
                "<div id='login-error' class='alert alert-success'>Password reset email sent!</div>";
            document.getElementById("resetpassword").reset();
        },
        function(error) {
            document.getElementById("success").innerHTML = 
                "<div id='login-error' class='alert alert-danger'>Failed to send email. Please try again.</div>";
        }
    );
});
</script>
<?php endif; ?>
</body>


</html>