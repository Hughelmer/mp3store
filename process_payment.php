<?php
session_start();

require_once('vendor/autoload.php'); // Include the Stripe PHP library
$stripe = new \Stripe\StripeClient('YOUR_STRIPE_SECRET_KEY');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalAmount = 0;
    foreach ($_SESSION['cart'] as $itemId => $item) {
        $totalAmount += $item['price'];
    }

    try {
        $stripe->charges->create([
            'amount' => $totalAmount * 100, // Stripe requires the amount in cents
            'currency' => 'usd',
            'source' => $_POST['stripeToken'],
        ]);

        // Clear the cart after successful payment
        $_SESSION['cart'] = [];

        echo "Payment successful!";
    } catch (\Stripe\Exception\CardException $e) {
        echo "Payment failed: " . $e->getMessage();
    }
}

// Create a new order and add it to the session's order history
$newOrder = [
    'date' => date('Y-m-d H:i:s'),
    'total' => $totalAmount,
    'items' => $_SESSION['cart']
];

if (!isset($_SESSION['orders'])) {
    $_SESSION['orders'] = [];
}

array_push($_SESSION['orders'], $newOrder);
?>
