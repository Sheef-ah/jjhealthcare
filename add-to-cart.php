<?php
session_start();
include('dbconnection.php');

// if (isset($_GET['productid'])) {
//     $product_id = $_GET['productid'];
if (isset($_POST['productid'])) {
    $product_id = intval($_POST['productid']);
    $quantity = isset($_POST['quantity']) ? max(1, intval($_POST['quantity'])) : 1; // Default to 1 if invalid or missing

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['Quantity'] += $quantity;
    } else {
        $query = "SELECT ProductID, ProductName, Price, Image FROM products WHERE ProductID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $product = $result->fetch_assoc();

            $_SESSION['cart'][$product_id] = [
                'ProductID' => $product['ProductID'],
                'ProductName' => $product['ProductName'],
                'Price' => $product['Price'],
                'Image' => $product['Image'],
                'Quantity' => $quantity
            ];
        } else {
            echo json_encode(['success' => false, 'message' => 'Product not found']);
            exit;
        }
    }

    echo json_encode(['success' => true, 'cartCount' => array_sum(array_column($_SESSION['cart'], 'Quantity'))]);
    exit;
} else {
    // Redirect if no product ID passed
    //header("Location: index.php");
    echo json_encode(['success' => false, 'message' => 'No product ID sent']);
    exit;
}
?>
