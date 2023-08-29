<?php
session_start();

if (isset($_GET['itemId'])) {
    $itemId = $_GET['itemId'];
    
    // Replace with your actual item data retrieval logic
    $item = [
        'title' => 'Sample Item',
        'price' => 10.99
    ];

    $_SESSION['cart'][$itemId] = $item;

    header("Location: cart.php");
    exit();
}
?>
