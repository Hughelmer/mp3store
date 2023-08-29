<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <div class="cart-items">
            <?php
            session_start();

            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                $totalAmount = 0;

                foreach ($_SESSION['cart'] as $itemId => $item) {
                    $totalAmount += $item['price'];
                    echo "<div class='cart-item'>";
                    echo "<h3>" . $item['title'] . "</h3>";
                    echo "<p>Price: $" . $item['price'] . "</p>";
                    echo "</div>";
                }

                echo "<p>Total Amount: $" . $totalAmount . "</p>";
            } else {
                echo "Your cart is empty.";
            }
            ?>
        </div>
        <form action="process_payment.php" method="post">
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="YOUR_STRIPE_PUBLIC_KEY"
                data-amount="<?php echo $totalAmount * 100; ?>"
                data-name="MP3 Shop"
                data-description="Payment"
                data-currency="usd">
            </script>
        </form>
    </div>
</body>
</html>
