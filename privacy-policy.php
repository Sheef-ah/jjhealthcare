<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Privacy Policy</title>
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
                    <h1>Privacy Policy</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->

    <div class="section pt-100 pb-90">
        <div class="container">
            <h2>J &amp; J Healthcare Ltd - </strong> <a href="https://www.jjhealthcareltd.com" target="_blank">www.jjhealthcareltd.com</a></h2>
            <p>At J &amp; J Healthcare Ltd, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you use our website or purchase Amaeyya and Prohall products in Mauritius.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>1. Who We Are</h4>
            <p>J &amp; J Healthcare Ltd is the sole authorised importer and distributor of Amaeyya and Prohall products in Mauritius. Our website <strong>www.jjhealthcareltd.com</strong> is intended to serve customers and resellers locally, offering access to genuine beauty and personal care products.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>2. Information We Collect</h4>
            <ul>
            <li>Full name</li>
            <li>Contact number</li>
            <li>Email address</li>
            <li>Delivery address</li>
            <li>Payment details (secured via third-party processors)</li>
            <li>Order history and preferences</li>
            <li>IP address and browsing behaviour (for analytics)</li>
            </ul>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>3. How We Use Your Information</h4>
            <ul>
                <li>To process and deliver your orders</li>
                <li>To provide customer service and respond to inquiries</li>
                <li>To send order confirmations and tracking updates</li>
                <li>To improve user experience and website performance</li>
                <li>To send promotional offers (with your consent)</li>
            </ul>
            <p>We do not sell, rent, or trade your personal data to third parties.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>4. Data Security</h4>
            <p>We implement robust security measures, including SSL encryption and secure payment gateways, to protect your personal data. Access to sensitive information is restricted to authorised personnel only.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>5. Cookies &amp; Tracking</h4>
            <p>We use cookies and analytics tools (e.g. Google Analytics) to understand website usage and improve functionality. You may manage your cookie preferences through your browser settings.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>6. Third-Party Services</h4>
            <p>Payments are processed via secure third-party platforms. We are not responsible for the privacy practices of these providers. We recommend reviewing their privacy policies directly.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>7. Sharing Website Content</h4>
            <p>All content on <strong>www.jjhealthcareltd.com</strong>—including product descriptions, images, graphics, videos, and logos—is protected under the Copyright Act 2014 of Mauritius and international intellectual property laws.</p>
            <p>You may not:</p>
            <ul>
                <li>Copy, reproduce, or redistribute website content for commercial purposes</li>
                <li>Modify, edit, or republish any content without written permission</li>
                <li>Use our brand name, logos, or product visuals in your own marketing or sales materials without approval</li>
            </ul>
            <p>Sharing links to our website on social media or messaging platforms is permitted, provided proper credit is given and content is not altered or misrepresented.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>8. Intellectual Property Notice</h4>
            <p>All trademarks, brand names, and intellectual property related to Amaeyya, Prohall, and J &amp; J Healthcare Ltd are protected under applicable Mauritian laws. Any unauthorised use will be subject to legal action.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>9. Your Rights Under Mauritian Law</h4>
            <p>Under Mauritius’ Data Protection Act 2017, you have the right to:</p>
            <ul>
                <li>Access, correct, or delete your personal data</li>
                <li>Withdraw consent at any time</li>
                <li>Lodge a complaint with the Data Protection Commissioner if you believe your data has been misused</li>
            </ul>
            <p>To exercise your rights, contact us at <a href="mailto:info@jjhealthcare.mu">info@jjhealthcare.mu</a>.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>10. Changes to this Policy</h4>
            <p>We reserve the right to update this policy to reflect changes in our practices or legal obligations. The latest version will always be posted on our website.</p>
        </div>
    </div>

    <div class="section pt-30 pb-30">
        <div class="container">
            <h4>11. Contact Information</h4>
            <p>If you have any questions about this Privacy Policy or how your data is handled, please contact us:</p>
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