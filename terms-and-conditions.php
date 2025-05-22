<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Terms and Conditions</title>
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
                                        if (!empty($login_session)) {
                                            echo "<li><a href='myaccount.php'>My Account</a></li>";
                                        }else {
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
                    <h1>Terms and Conditions</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->

    <div class="section pt-100 pb-90">
        <div class="container">
            <h2>J &amp; J Healthcare Ltd - </strong> <a href="https://www.jjhealthcareltd.com" target="_blank">www.jjhealthcareltd.com</a></h2>
            <p>Welcome to the official website of J &amp; J Healthcare Ltd, the sole importer and distributor of Amaeyya and Prohall products in Mauritius. By accessing and using our website, you agree to comply with and be bound by the following Terms and Conditions. Please read them carefully before placing any order.</p>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>1. General</h4>
            <ul>
                <li>This website is operated by J &amp; J Healthcare Ltd, registered in Mauritius.</li>
                <li>By using this site, you confirm that you are at least 18 years of age or have parental/guardian consent to purchase.</li>
                <li>We reserve the right to update or change these Terms at any time. Continued use of the site signifies your acceptance of any changes.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>2. Product Information</h4>
            <ul>
                <li>All products listed under Amaeyya and Prohall are genuine and sourced directly through authorised international partners.</li>
                <li>We strive to provide accurate descriptions and images. However, slight variations in packaging or formula may occur.</li>
                <li>Prices are displayed in Mauritian Rupees (MUR) and are inclusive of applicable VAT, unless stated otherwise.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>3. Orders and Payments</h4>
            <ul>
                <li>Orders can be placed directly through our website. Once submitted, you will receive an order confirmation via email.</li>
                <li>We accept secure online payment methods including JuiceByMCB, bank transfers, and cash on delivery.</li>
                <li>Orders are processed only upon half payment confirmation, for orders above Rs. 3000.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>4. Shipping and Delivery</h4>
            <ul>
                <li>We deliver island-wide in Mauritius, for sales above Rs. 3000.</li>
                <li>Standard delivery timeframe is 2 - 5 business days after payment confirmation, subject to availability.</li>
                <li>Delivery charges apply and will be calculated at checkout.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>5. Returns and Exchanges</h4>
            <ul>
                <li>Due to the nature of personal care products, we do not accept returns once items are opened or used.</li>
                <li>If you receive a damaged, defective, or incorrect item, please notify us within 48 hours of receipt for replacement or store credit.</li>
                <li>All returns must be in original condition and packaging.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>6. User Responsibilities</h4>
            <ul>
                <li>You agree to use this website for lawful purposes only.</li>
                <li>You are responsible for maintaining the confidentiality of your login credentials and any activities under your account.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>7. Limitation of Liability</h4>
            <ul>
                <li>J &amp; J Healthcare Ltd is not liable for any indirect, incidental, or consequential damages resulting from the use of our products or website.</li>
                <li>Users are advised to read product labels and perform patch tests where applicable. We are not responsible for allergic or adverse reactions.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>8. Intellectual Property</h4>
            <p>All content, including text, logos, images, and product information on this website, is the property of J &amp; J Healthcare Ltd or its partners and is protected by intellectual property laws.</p>
        </div>
    </div>

    <div class="section pt-20 pb-20">
        <div class="container">
            <h4>9. Contact Us</h4>
            <p>If you have any questions or concerns regarding these Terms and Conditions, please contact us at:</p>
            <ul>
                <li>📧 <a href="mailto:info@jjhealthcareltd.com">info@jjhealthcareltd.com</a></li>
                <li>🌐 <a href="https://www.jjhealthcareltd.com" target="_blank">www.jjhealthcareltd.com</a></li>
                <li>📞 +230 5 943 4000</li>
            </ul>
        </div>
    </div>

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
</body>


</html>