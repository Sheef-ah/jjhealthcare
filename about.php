<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - About</title>
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
                                <li class="active"><a href="about.php">About</a></li>
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
                    <h1>About us</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- About Section Start-->
    <div class="about-section section pt-120 pb-90">
        <div class="container">
            <div class="row flex-row-reverse">
                
                <!-- About Image -->
                <div class="about-image col-lg-6 col-12 mb-30">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=7e90gBu4pas"><img src="img/about.jpg" alt=""></a>
                </div>
                
                <!-- Mission Content -->
                <div class="about-content col-lg-6 col-12 mb-30">
                    <h2>About <span>J &amp; J Healthcare</span></h2>
                    <p>Founded in 2021, J &amp; J Healthcare is a dynamic and innovative company based in Mauritius,
                        dedicated to bringing premium beauty and wellness products to the island. As the sole
                        supplier of two renowned international brands—Amaeyya from India and Prohall from
                        Brazil—we are committed to providing our customers with exceptional quality products that
                        prioritize health, beauty, and natural care.</p>
                    
                        <h2>Our <span>Mission</span></h2>
                        <p>Our mission is to enhance the beauty and wellness experiences of Mauritians by offering
                            carefully curated, high-quality products sourced from trusted global brands. We believe in the
                            power of nature and innovation to promote healthier lifestyles and greater self-confidence.</p>
                </div>
                
            </div>
        </div>
    </div><!-- About Section End-->
    
    <!-- Exclusive Brands Section Start-->
    <div class="team-section section pb-120">
        <div class="container">
           
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h2>Our Exclusive Brands</h2>
                </div>
            </div>
           
            <div class="row flex-row">
                <div class="col-lg-10 col-12 mb-30">
                    <h3>Amaeyya — Organic Beauty from India</h3>
                    <p>Amaeyya embodies the rich heritage of Indian wellness, offering a range of organic cosmetic
                        products crafted from natural, chemical-free ingredients. This brand promotes holistic care
                        and nurtures your skin with the purity it deserves.</p>
                </div>
                <img class="col-lg-2 col-12 mb-30" style="width: 175px; height: 175px" src="img/amaeyya-logo.jpg"/>
            </div>
            
            <div class="row flex-row-reverse">
                <div class="col-lg-10 col-12 mb-30">
                    <h3>Prohall — Brazilian Haircare Excellence</h3>
                    <p>Prohall brings cutting-edge haircare solutions from Brazil, designed to meet diverse haircare
                        needs. Enriched with natural ingredients, Prohall products offer salon-quality results, helping
                        customers achieve strong, healthy, and beautiful hair.</p>
                </div>
                <img style="width: 175px; height: 175px" src="img/prohall-logo.jpg"/>
            </div>
        </div>
    </div><!-- Exclusive Brands Section End-->

    
    <!-- Our Vision Section Start-->
    <div class="team-section section pb-120">
        <div class="container">
           
            <div class="row">
                <div class="section-title text-center col">
                    <h2>Our Vision for Growth</h2>
                </div>
            </div>
            
            <p>As we continue to build our presence in Mauritius, J &amp; J Healthcare is actively seeking to
                expand our portfolio by partnering with more world-class beauty and wellness brands. Our
                goal is to become the leading distributor of premium health and beauty products in the
                region.</p>
            
        </div>
    </div><!-- Our Vision Section End-->

    
    
    <!-- Why choose us Section Start-->
    <div class="team-section section pb-120">
        <div class="container">
           
            <div class="row">
                <div class="section-title col">
                    <h2>Why Choose J &amp; J Healthcare?</h2>
                </div>
            </div>

            <ul>
                <li><strong>Exclusive Partnerships:</strong>  Sole distributor of Amaeyya and Prohall products in
                    Mauritius.</li>
                <li><strong>Commitment to Quality:</strong> We source only the best products from globally recognized
brands.</li>
                <li><strong>Customer-Centric Approach:</strong> Our customers’ satisfaction is at the heart of
                    everything we do.</li>
                <li><strong>Future-Focused:</strong> Dedicated to continuous growth and innovation in the beauty and
                    wellness sector.</li>
                <li><strong>Natural &amp; Organic Focus:</strong> We prioritize products that are gentle on your skin, hair,
                    and the planet.</li>
                <li><strong>Premium Quality:</strong> Sourced from trusted global brands committed to excellence.</li>
                <li><strong>Convenient Online Shopping:</strong> Explore and purchase your favorite beauty essentials
                    on our website and enjoy doorstep delivery.</li>
                <li><strong>Customer Satisfaction:</strong> Your wellness and happiness are at the heart of what we do.</li>
            </ul>
            
        </div>
    </div><!-- Why choose us Section End-->

       
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