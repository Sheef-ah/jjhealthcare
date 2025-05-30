<?php
session_start();
include('dbconnection.php');

// if (isset($_GET['productid'])) {
//     $product_id = $_GET['productid'];
if (isset($_POST['productid'])) {
    $product_id = intval($_POST['productid']);

    // Initialize cart array if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // If product already in cart, increment quantity, else add it
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['Quantity'] += 1;
    } else {
        $query = "SELECT ProductID, ProductName, Price, Image FROM products WHERE ProductID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
          $product = $result->fetch_assoc();

          // Store all required details in the session
          $_SESSION['cart'][$product_id] = [
              'ProductID' => $product['ProductID'],
              'ProductName' => $product['ProductName'],
              'Price' => $product['Price'],
              'Image' => $product['Image'],
              'Quantity' => 1
          ];
        } else {
            echo json_encode(['success' => false, 'message' => 'Product not found']);
            exit;
        }
    }

    // Redirect back to the product list or cart page
    //header("Location: index.php");
    echo json_encode(['success' => true, 'cartCount' => array_sum(array_column($_SESSION['cart'], 'Quantity'))]);
    exit;
} else {
    // Redirect if no product ID passed
    //header("Location: index.php");
    echo json_encode(['success' => false, 'message' => 'No product ID sent']);
    exit;
}
?>
