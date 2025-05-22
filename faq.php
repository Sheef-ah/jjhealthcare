<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Frequently Asked Questions</title>
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
                    <h1>Frequently Asked Questions - FAQ's</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->

    <div class="section pt-60 pb-60">
        <div class="container">
            <h2>J &amp; J Healthcare Ltd - </strong> Sole Importer of Amaeyya & Prohall in Mauritius</h2>
            <p>Welcome to our FAQ section! Below you’ll find answers to the most common questions about our products, website purchases, and delivery process. If you don’t find your answer here, feel free to reach out to us via our contact page.</p>
        </div>
    </div>

    <!-- About The Products -->
    <div class="container">
        <div class="section pt-40 pb-40">
            <h3>🛍 About the Products</h3>
        </div>

        <div class="container">
            <div class="section pt-20 pb-20">
                <h4>1. What are Amaeyya products?</h4>
                <p>Amaeyya offers a premium range of skincare and wellness products, combining natural ingredients with advanced formulations. From facial serums to body care, these products are crafted to nourish, rejuvenate, and enhance skin health.</p>
            </div>
            
            <div class="section pt-20 pb-20">
                <h4>2. What is Prohall?</h4>
                <p>Prohall is a globally respected Brazilian brand known for its high-performance haircare solutions, including keratin treatments, smoothing systems, masks, and professional salon products.</p>
            </div>
            
            <div class="section pt-20 pb-20">
                <h4>3. Are these products suitable for all hair and skin types?</h4>
                <p>Yes. Both Amaeyya and Prohall offer formulations for different hair and skin types. Please refer to individual product descriptions or contact us for personalised advice.</p>
            </div>

            <div class="section pt-20 pb-20">
                <h4>4. Are your products authentic?</h4>
                <p>Absolutely. J & J Healthcare Ltd is the sole authorised importer of Amaeyya and Prohall in Mauritius. All products are 100% genuine and imported directly from certified manufacturers.</p>
            </div>
        
            <div class="section pt-20 pb-20">
                <h4>5. Do you offer professional salon sizes?</h4>
                <p>Yes. We offer both retail and professional salon-size formats for selected products, especially from the Prohall range.</p>
            </div>
        </div>
    </div>
    <!-- About The Products End -->

    <!-- Ordering & Sales Process -->
    <div class="container">
        <div class="section pt-40 pb-40">
            <h3>🛒 Ordering & Sales Process</h3>
        </div>

        <div class="container">
            <div class="section pt-20 pb-20">
                <h4>6. How can I place an order on the website?</h4>
                <p>Simply browse our product pages, select the items you wish to buy, and add them to your cart. Once ready, proceed to checkout and complete your order by following the secure payment steps.</p>
            </div>
            
            <div class="section pt-20 pb-20">
                <h4>7. What payment methods do you accept?</h4>
                <p>We accept Internet Banking such as bank transfers and JuiceByMCB and Cash on Delivery. All payments are processed securely.</p>
            </div>
            
            <div class="section pt-20 pb-20">
                <h4>8. Can I buy products without creating an account?</h4>
                <p>Yes, you can checkout as a guest. However, we recommend creating an account for a faster checkout, order tracking, and exclusive promotions.</p>
            </div>

            <div class="section pt-20 pb-20">
                <h4>9. How long does delivery take?</h4>
                <p>Orders are typically delivered within <strong>2–5 business days</strong> across Mauritius, depending on your location and stock availability.</p>
            </div>
        
            <div class="section pt-20 pb-20">
                <h4>10. Do you charge for delivery?</h4>
                <p>Yes, a small delivery fee applies, which is calculated at checkout based on your location. But orders above Rs 3000 are free of charge for deliveries.</p>
            </div>
        </div>
    </div>
    <!-- Ordering & Sales Process End -->

    <!-- Returns, Support & Safety -->
    <div class="container">
        <div class="section pt-40 pb-40">
            <h3>🔄 Returns, Support & Safety</h3>
        </div>

        <div class="container">
            <div class="section pt-20 pb-20">
                <h4>11. What if I receive the wrong or damaged product?</h4>
                <p>Please contact us within <strong>48 hours</strong> of delivery with photos of the issue. We’ll arrange for a replacement or store credit.</p>
            </div>
            
            <div class="section pt-20 pb-20">
                <h4>12. Can I return an opened product?</h4>
                <p>Due to hygiene and safety standards, we do <strong>not accept returns</strong> on opened or used products unless they are faulty or sent in error.</p>
            </div>
            
            <div class="section pt-20 pb-20">
                <h4>13. Are patch tests recommended?</h4>
                <p>Yes. We advise performing a patch test before using any new skincare or haircare product to ensure there’s no sensitivity or allergic reaction.</p>
            </div>

            <div class="section pt-20 pb-20">
                <h4>14. Where can I get more information on product usage?</h4>
                <p>Product usage instructions are provided on each item’s label and our website. You may also contact our customer care team for expert guidance.</p>
            </div>
        </div>
    </div>
    <!-- Returns, Support & Safety End -->

    <!-- Need Help -->
    <div class="section pt-40 pb-40">
        <div class="container">
            <h4>📲 Need Help?</h4>
            <p>If your question isn’t listed above, please reach out to us directly:</p>
            <ul>
                <li>📧 <a href="mailto:info@jjhealthcareltd.com">info@jjhealthcareltd.com</a></li>
                <li>🌐 <a href="https://www.jjhealthcareltd.com" target="_blank">www.jjhealthcareltd.com</a></li>
                <li>📞 +230 5 943 4000</li>
            </ul>
        </div>
    </div>
    <!-- Need Help End -->

    

    <div class="container">    
        <div id="accordion" class="section pt-60 pb-60">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h3 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        About the Products
                    </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                    <div class="section pt-20 pb-20">
                            <div class="container">
                                <h4>1. What are Amaeyya products?</h4>
                                <p>Amaeyya offers a premium range of skincare and wellness products, combining natural ingredients with advanced formulations. From facial serums to body care, these products are crafted to nourish, rejuvenate, and enhance skin health.</p>
                            </div>
                        </div>

                        <div class="section pt-20 pb-20">
                            <div class="container">
                                <h4>2. What is Prohall?</h4>
                                <p>Prohall is a globally respected Brazilian brand known for its high-performance haircare solutions, including keratin treatments, smoothing systems, masks, and professional salon products.</p>
                            </div>
                        </div>

                        <div class="section pt-20 pb-20">
                            <div class="container">
                                <h4>3. Are these products suitable for all hair and skin types?</h4>
                                <p>Yes. Both Amaeyya and Prohall offer formulations for different hair and skin types. Please refer to individual product descriptions or contact us for personalised advice.</p>
                            </div>
                        </div>

                        <div class="section pt-20 pb-20">
                            <div class="container">
                                <h4>4. Are your products authentic?</h4>
                                <p>Absolutely. J & J Healthcare Ltd is the sole authorised importer of Amaeyya and Prohall in Mauritius. All products are 100% genuine and imported directly from certified manufacturers.</p>
                            </div>
                        </div>

                        <div class="section pt-20 pb-20">
                            <div class="container">
                                <h4>5. Do you offer professional salon sizes?</h4>
                                <p>Yes. We offer both retail and professional salon-size formats for selected products, especially from the Prohall range.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    This is the second item's accordion body.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    This is the third item's accordion body.
                    </div>
                </div>
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