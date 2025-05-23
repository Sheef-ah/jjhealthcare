<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Authorized Reseller</title>
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
                    <h1>Authorized Reseller</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->

    <div class="section pt-120 pb-90">
        <div class="container">
            <p><h2>Partner with J &amp; J Healthcare Ltd - The Exclusive Importer of Amaeyya &amp; Prohall in Mauritius</h2></p>
            <p>Elevate Your Business with World-Class Beauty and Haircare Brands</p>
            <p>J &amp; J Healthcare Ltd is the sole importer and distributor of the internationally acclaimed Amaeyya and Prohall product lines in Mauritius. As a trusted name in the beauty and wellness industry, we are proud to bring these premium brands to local salons, beauty clinics, and professional retailers who share our commitment to quality, excellence, and customer satisfaction.</p>
        </div>
    </div>

    <div class="section pt-60 pb-30">
        <div class="container">
            <h2>About Our Brands</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Amaeyya</strong> - Inspired by nature, perfected by science. Amaeyya offers a luxurious range of skincare and wellness products made with high-performance ingredients that deliver visible results. From rejuvenating serums to nourishing body care, every product reflects elegance, purity, and effectiveness.</li>
                <li class="list-group-item"><strong>Prohall Cosmetic</strong> - A Brazilian brand globally known for its professional-grade hair care and smoothing treatments. Prohall offers advanced formulas such as keratin systems, intensive masks, and hair reconstructor lines—ideal for salons seeking transformative hair care solutions.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-60 pb-30">
        <div class="container">
            <h2>Why Partner With Us?</h2>
            <ul class="list-group">
                <li class="list-group-item">✅ <strong>Exclusive Access</strong> - As the sole importer, we provide authorised resellers exclusive access to genuine Amaeyya and Prohall products in Mauritius.</li>
                <li class="list-group-item">✅ <strong>Brand Recognition</strong> - Both brands have a strong international presence and are trusted by professionals worldwide.</li>
                <li class="list-group-item">✅ <strong>Marketing Support</strong> - Enjoy product training, branding material, and promotional support to grow your business.</li>
                <li class="list-group-item">✅ <strong>Fast Local Supply</strong> - Direct access to stock in Mauritius, ensuring timely restocking and delivery.</li>
            </ul>
        </div>
    </div>

    <div class="section pt-60 pb-30">
        <div class="container">
            <h2>Terms &amp; Conditions to Become an Authorised Reseller</h2>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item"><strong>Business Validity</strong> - Must be a registered business operating in the beauty, wellness, or retail sector.</li>
                <li class="list-group-item"><strong>Retail/Salon Presence</strong> - A physical store or salon setup is preferred (online sellers may be considered upon review).</li>
                <li class="list-group-item"><strong>Minimum Order Requirement</strong> - Initial purchase must meet our minimum order value for each brand.</li>
                <li class="list-group-item"><strong>Pricing &amp; Brand Policy</strong> - Resellers must follow standard pricing guidelines and cannot alter product branding or packaging.</li>
                <li class="list-group-item"><strong>Marketing Compliance</strong> - All promotional activities must be pre-approved to ensure consistency with brand image.</li>
            </ol>
        </div>
    </div>

    <div class="section cta pt-60 pb-30">
        <div class="container">
            <div class="p-4 text-center rounded">
                <h3>Ready to Elevate Your Business?</h3>
                <p>Take your product offering to the next level by joining our network of trusted partners. Whether you’re a boutique salon, beauty clinic, or retailer, we welcome you to be part of the exclusive Amaeyya and Prohall distribution chain in Mauritius.</p>
                <p>🌐 <a href="https://www.jjhealthcareltd.com" target="_blank">Visit our website</a> to apply as an authorised reseller.</p>
                <p>💬 Let's shape beauty, confidence, and success — together.</p>
            </div>
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