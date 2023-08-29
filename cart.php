<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Shopping Cart</h2>
        <div class="cart-items">
            <?php
            session_start();

            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                foreach ($_SESSION['cart'] as $itemId => $item) {
                    echo "<div class='cart-item'>";
                    echo "<h3>" . $item['title'] . "</h3>";
                    echo "<p>Price: $" . $item['price'] . "</p>";
                    echo "<button onclick='removeFromCart($itemId)'>Remove</button>";
                    echo "</div>";
                }
            } else {
                echo "Your cart is empty.";
            }
            ?>
        </div>
        <a href="catalog.php">Continue Shopping</a>
    </div>

    <script>
        function removeFromCart(itemId) {
            window.location.href = "remove_from_cart.php?itemId=" + itemId;
        }
    </script>
</body>
</html>
