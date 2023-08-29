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
    $password = trim($_POST['password']);

    // Validate and sanitize input 

    // Fetch the user's hashed password from the database
    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = $connection->query($query);

    /*if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the entered password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            echo "Login successful!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }*/

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = trim($row['password']);

        echo "Entered Password: " . $password . "<br>";
        /*if (password_verify($password, $hashedPassword)) {
            echo "Login successful!";
        } else {
            echo "Incorrect password.";
        }*/

        if ($hashedPassword === $password) {
            echo "Login successful!";
        } else {
            echo "Incorrect password.";
        }


    } else {
        echo "User not found.";
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    // Close the connection
    $connection->close();
}
?>
