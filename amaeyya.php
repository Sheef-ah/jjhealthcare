<?php
include('session.php');
include('dbconnection.php'); // including database connection

if (!empty($_GET['category1']) && !empty($_GET['category2'])) {

    $category1 = $_GET['category1'];
    $category2 = $_GET['category2'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE CategoryID = ? OR CategoryID = ?");
    $stmt->bind_param("ii", $category1, $category2);
    $stmt->execute();
    $result = $stmt->get_result();

} elseif (!empty($_GET['category1'])) {

    $category1 = $_GET['category1'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE CategoryID = ?");
    $stmt->bind_param("i", $category1);
    $stmt->execute();
    $result = $stmt->get_result();

} elseif (!empty($_GET['category2'])) {

    $category2 = $_GET['category2'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE CategoryID = ?");
    $stmt->bind_param("i", $category2);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JJHEALTHCARE - Amaeyya</title>
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
                                        <!-- Mini Cart -->
                                        <?php include("mini-cart-preview.php") ?>
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
                                <li><a href="amaeyya.php?category1=1">Skincare</a></li>
                                <li><a href="#">Makeup</a>
                                    <ul class="sub-menu">
                                        <li><a href="amaeyya.php?category1=2">Face</a></li>
                                        <li><a href="amaeyya.php?category1=3">Lips</a></li>
                                        <li><a href="amaeyya.php?category1=4">Eyes</a></li>
                                    </ul>
                                </li>
                                <li><a href="amaeyya.php?category1=5">Hair Care</a></li>
                                <li><a href="amaeyya.php?category1=6">Body Care</a></li>
                                <li><a href="amaeyya.php?category1=7">Nails</a></li>
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
        <div class="hero-item" style="background-image: url(img/ameyya-banner.jpg)">


        </div><!-- Hero Slide Item End-->

    </div><!-- Hero Slider End-->

    <!-- Home About Section Start-->


    <!-- Home About Section End-->
    
       
    <!-- Product Section Start-->
    <div class="product-section section pt-70 pb-60">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h1>Products List</h1>
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
                        echo '<a href="" class="category">Amaeyya</a>';
                        echo '</div>';
                        echo '<div class="price float-right">';
                        echo '<span class="new">Rs '.$row['Price'].'.00</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="action-button fix">';
                        //echo '<a href="#">add to cart</a>';
                        echo '<a href="#" class="add-to-cart" data-productid="'.$row['ProductID'].'">add to cart</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }

                else{
                    echo '<p class="section-title text-center col mb-60">No product available.</p>';
                }
            ?>
                
            </div><!-- Product Wrapper End-->
            
        </div>
    </div><!-- Product Section End-->
    
       
    <!-- Footer Section Start-->
    <?php include('footer-section.php') ?>
    <!-- Footer Section End-->


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