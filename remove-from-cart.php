<?php
session_start();
header('Content-Type: application/json');

if (isset($_POST['productid'])) {
    $product_id = intval($_POST['productid']);

    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
        echo json_encode([
            'success' => true,
            'cartCount' => array_sum(array_column($_SESSION['cart'], 'Quantity'))
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Item not in cart']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No product ID received']);
}
