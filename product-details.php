<?php
include('session.php');
include('dbconnection.php'); // including database connection

if (!empty($_GET['productid'])) {

    $productid = $_GET['productid'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE ProductID = ?");
    $stmt->bind_param("i", $productid);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

}
?>
<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Product Details</title>
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
                                    <a href="index.php" class="logo"><img src="img/LOGO1.png" alt="logo"></a>
                                </div>

                                <!-- Account Menu -->
                                <div class="account-menu col-md-4 col-12">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
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
                            <a href="index.php" class="logo"><img src="img/LOGO1.png" alt="logo"></a>
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
                    <h1>Product details</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Product Section Start-->
    <div class="product-section section pt-110 pb-90">
        <div class="container">
            
            <!-- Product Wrapper Start-->
            <div class="row">
                
                <!-- Product Image & Thumbnail Start -->
                <div class="col-lg-7 col-12 mb-30">
                   
                    <!-- Product Thumbnail -->
<!--                     <div class="single-product-thumbnail product-thumbnail-slider float-left">
                        <div class="single-thumb"><img src="img/product-details/thumb-1.jpg" alt=""></div>
                        <div class="single-thumb"><img src="img/product-details/thumb-2.jpg" alt=""></div>
                        <div class="single-thumb"><img src="img/product-details/thumb-3.jpg" alt=""></div>
                        <div class="single-thumb"><img src="img/product-details/thumb-4.jpg" alt=""></div>
                    </div> -->
                    
                    <!-- Product Image -->
                    <div class="single-product-image product-image-slider fix">
                        <div class="single-image"><img src="<?php echo $row['Image']?>" alt=""></div>
                    </div>
                    
                </div><!-- Product Image & Thumbnail End -->
                
                <!-- Product Content Start -->
                <div class="single-product-content col-lg-5 col-12 mb-30">
                   
                    <!-- Title -->
                    <h1 class="title"><?php echo $row['ProductName']?></h1>
                    
                    <!-- Product Rating -->
                    <span class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                    
                    <!-- Price -->
                    <span class="product-price">Rs <?php echo $row['Price']?>.00</span>
                    
                    <!-- Description -->
                    <div class="description">
                        <p><?php echo $row['Description']?></p>
                    </div>
                    
                    <!-- Quantity & Cart Button -->
                    <div class="product-quantity-cart fix">
                        <div class="product-quantity">
                            <input type="text" value="0" name="qtybox">
                        </div>
                        <button class="add-to-cart">add to cart</button>
                    </div>
                    
                </div><!-- Product Content End -->
                
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

                                <img class="footer-logo" src="img/LOGO1.png" alt="logo">
                                <p>we believe that true beauty begins with nature. That’s why we are proud to bring the finest organic and natural cosmetic products to the people of Mauritius. Our mission is simple — to connect you with premium beauty solutions that prioritize your health, the environment, and exceptional results.</p>

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-2 col-md-3 col-12 mb-40">

                                <h4 class="widget-title">Information</h4>

                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Useful Links</a></li>
                                    <li><a href="#">Authorized Resellers</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="faq.html">FAQ's</a></li>
                                    <li><a href="#">Contact us</a></li>
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
                                    <li><span>Address:</span> ur address goes here,street Crossroad 123</li>
                                    <li><span>Phone:</span> +99 859 658 589 . +69 587 456 25</li>
                                    <li><span>Eax:</span> +55 784 7585 . + 985 698 586</li>
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