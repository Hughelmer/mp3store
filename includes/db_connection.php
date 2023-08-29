<?php
$host = 'localhost';         // Database host (usually 'localhost' for local development)
$username = 'root';          // Your MySQL username (default is 'root' for XAMPP)
$password = '';              // Your MySQL password (default is empty for XAMPP)
$database = 'mp3shop_db';  // Your database name

// Create a connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Connected successfully
echo "Connected to the database!";
?>
