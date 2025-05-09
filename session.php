<?php
include('dbconnection.php');
session_start();

if (!empty($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE Email = ?");
    $stmt->bind_param("s", $user_check);
    $stmt->execute();

    // Get result and fetch associative array
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $login_session = $row['FirstName'];
    }

    $stmt = $conn->prepare("SELECT * FROM Addresses WHERE UserID = ? LIMIT 1");
    $stmt->bind_param("i", $row['UserID']);
    $stmt->execute();
    $addr_result = $stmt->get_result();

    if ($address = $addr_result->fetch_assoc()) {

        $add = $address['Street'] . ', ' . $address['City'] . ', ' . $address['Country'];
        $_SESSION['default_address'] = [
            'street'     => $address['Street'],
            'apartment'  => $address['State'],
            'city'       => $address['City'],
            'zipcode'    => $address['ZipCode'],
            'country'    => $address['Country'],
            'phone'      => $address['PhoneNumber'],
        ];
    }

    $stmt->close();
}
?>