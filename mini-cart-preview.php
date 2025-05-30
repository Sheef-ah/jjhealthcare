<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span id="card-count" class="num"><?php echo array_sum(array_column($_SESSION['cart'], 'Quantity')) ?></span></a>
                                            
    <!-- Mini Cart -->
    <div class="mini-cart-brief dropdown-menu text-left">
        <div id="mini-cart">
            <!-- Cart Product -->
            <div class="all-cart-product clearfix">
            <?php 
                if (!empty($_SESSION['cart'])) {
                    $total = 0;
                    foreach ($_SESSION['cart'] as $product_id => $item) {
                        $subtotal = $item['Price'] * $item['Quantity'];
                        $total += $subtotal;
                        echo '<div class="single-cart clearfix">';
                        echo '<div class="cart-image">';
                        echo '<a href="product-details.html"><img src="'. $item['Image'] . '" alt=""></a>';
                        echo '</div>';
                        echo '<div class="cart-info">';
                        echo '<h5><a href="product-details.html">'. $item['ProductName'] . '</a></h5>';
                        echo '<p>'. $item['Quantity'] . ' x Rs'. $item['Price'] . '</p>';
                        echo '<a href="#" class="cart-delete remove-from-cart" data-productid="'. $item['ProductID'] . '" title="Remove this item"><i class="fa fa-trash-o"></i></a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Your cart is empty.</p>";
                }
            ?>
            </div>

            <!-- Cart Total -->
            <?php if (!empty($_SESSION['cart'])) { ?>
                <div class="cart-totals">
                    <h5>Total <span>Rs <?php echo number_format($total, 2); ?></span></h5>
                </div>
            <?php } ?>
        </div>
                                                     
        <!-- Cart Button -->
        <div class="cart-bottom  clearfix">
            <a href="checkout.html">Check out</a>
        </div>
    </div>
    
</li>