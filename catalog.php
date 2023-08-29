<!DOCTYPE html>
<html>
<head>
    <title>MP3 Catalog</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>MP3 Catalog</h2>
        <div class="mp3-list">
            <?php
            // Replace with your database connection code
            $conn = new mysqli("localhost", "root", "", "mp3shop_db");
            $sql = "SELECT * FROM mp3s";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='mp3-item'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>Artist: " . $row["artist"] . "</p>";
                    echo "<p>Genre: " . $row["genre"] . "</p>";
                    echo "<p>Price: $" . $row["price"] . "</p>";
                    echo "<button>Add to Cart</button>";
                    echo "</div>";
                }
            } else {
                echo "No MP3s available.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
