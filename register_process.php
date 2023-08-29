<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mp3shop_db';

// Create a connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate and sanitize input

    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

        if ($connection->query($query) === TRUE) {
            echo "Registration successful! Redirecting to login page...";
            // Redirect to the login page after a successful registration
            header("Location: login.php");
            exit(); // Make sure to exit after sending the header
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
    }

    // Close the connection
    $connection->close();
}
?>
