<?php
include('session.php');
include('dbconnection.php'); // including database connection

    $stmt = $conn->prepare("SELECT p.*, c.Brand FROM products p JOIN categories c ON p.CategoryID = c.CategoryID ORDER BY RAND() LIMIT 6;");
    $stmt->execute();
    $result = $stmt->get_result();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE</title>
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
                                <li class="active"><a href="index.php">home</a></li>
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
    
       
    <!-- Hero Slider Start-->
    <div class="hero-slider section fix">

        <!-- Hero Slide Item Start-->
        <div class="hero-item" style="background-image: url(img/hero/1.jpg)">

            <!-- Hero Content Start-->
            <div class="hero-content text-center m-auto">
                <h1>J & J Healthcare</h1>
                <p>Your Gateway to Authentic Organic and Natural Beauty</p>
                <a href="about.html">LEARN MORE</a>

            </div><!-- Hero Content End-->


        </div><!-- Hero Slide Item End-->

    </div><!-- Hero Slider End-->

    <!-- Home About Section Start-->

    <div class="testimonial-section section bg-gray pt-100 pb-65">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h1>Welcome to J & J Healthcare:</h1>
                    <h2>Your Gateway to Authentic Organic and Natural Beauty</h2>
                </div>
            </div><!-- Section Title End-->
            
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 ml-auto mr-auto">
                    
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider text-center">
                        
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <p>At J & J Healthcare, we believe that true beauty begins with nature. That’s why we are proud to bring the finest organic and natural cosmetic products to the people of Mauritius. Our mission is simple — to connect you with premium beauty solutions that prioritize your health, the environment, and exceptional results</p>
                            <div class="section-title text-center col mb-40" style="margin-top: 60px;">
                                <h1>Our Brands</h1>
                            </div>
                            <h3 class="mb-30">Amaeyya — Organic Wellness from India</h3>
                            <div class="mb-60" style="display: flex; align-items: center; gap:50px">
                                <p>Immerse yourself in the purity of Amaeyya’s organic cosmetic range, crafted using time-honored Indian traditions and natural ingredients. Amaeyya products are designed to nurture your skin and body with the finest organic extracts, free from harmful chemicals. Experience the magic of nature’s bounty with skincare solutions that truly care.</p>
                                <img style="width: 175px; height: 175px" src="img/amaeyya-logo.jpg"/>
                            </div>

                            <h3 class="mb-30">Prohall — Brazilian Haircare Excellence</h3>
                            <div style="display: flex; flex-direction: row-reverse; align-items: center; gap:50px;">
                                <p>Discover the transformative power of Prohall’s advanced haircare products from Brazil. Whether you seek to revitalize damaged hair, maintain vibrant curls, or achieve salon-quality smoothness, Prohall offers innovative solutions enriched with natural ingredients to give your hair the care it deserves.</p>
                                <img style="width: 175px; height: 175px" src="img/prohall-logo.jpg"/>
                            </div>
                        </div>
                        
                    </div><!-- Testimonial Slider End -->
                    
                </div>
            </div>
            
        </div>
    </div>

    <!-- Home About Section End-->
    
       
    <!-- Product Section Start-->
    <div class="product-section section pt-70 pb-60">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h1>Featured Products</h1>
                </div>
            </div><!-- Section Title End-->
            
            <!-- Product Wrapper Start-->
            <div class="row">

            <?php
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-md-6 col-12 mb-60">';
                        echo '<div class="product">';
                        echo '<div class="image">';
                        echo '<a href="product-details.php?productid='.$row['ProductID'].'" class="img"><img src="'.$row['Image'].'" alt="Product"></a>';
                        echo '</div>';
                        echo '<div class="content">';
                        echo '<div class="head fix">';
                        echo '<div class="title-category float-left">';
                        echo '<h5 class="title"><a href="product-details.php?productid='.$row['ProductID'].'">'.$row['ProductName'].'</a></h5>';
                        echo '<a href="" class="category">'.$row['Brand'].'</a>';
                        echo '</div>';
                        echo '<div class="price float-right">';
                        echo '<span class="new">Rs '.$row['Price'].'</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="action-button fix">';
                        echo '<a href="#">add to cart</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } 
            ?>
                
            </div><!-- Product Wrapper End-->
            
        </div>
    </div><!-- Product Section End-->
    
       
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
</body>

</html>