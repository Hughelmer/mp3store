<?php
session_start();

if (isset($_GET['itemId'])) {
    $itemId = $_GET['itemId'];
    
    if (isset($_SESSION['cart'][$itemId])) {
        unset($_SESSION['cart'][$itemId]);
    }

    header("Location: cart.php");
    exit();
}
?>
