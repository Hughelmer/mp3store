<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Order History</h2>
        <div class="order-list">
            <?php
            session_start();

            if (isset($_SESSION['orders']) && count($_SESSION['orders']) > 0) {
                foreach ($_SESSION['orders'] as $orderId => $order) {
                    echo "<div class='order-item'>";
                    echo "<h3>Order #" . $orderId . "</h3>";
                    echo "<p>Date: " . $order['date'] . "</p>";
                    echo "<p>Total Amount: $" . $order['total'] . "</p>";
                    echo "<p>Items:</p>";
                    echo "<ul>";
                    foreach ($order['items'] as $itemId => $item) {
                        echo "<li>" . $item['title'] . " - $" . $item['price'] . "</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                }
            } else {
                echo "No order history available.";
            }
            ?>
        </div>
    </div>
</body>
</html>
