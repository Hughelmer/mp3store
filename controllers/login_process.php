<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$conn = new mysqli("localhost", "username", "password", "database");
	$sql = "SELECT * FROM users WHERE username='$username' AND password='password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		$_SESSION["username"] = $username;
		header("Location: dashboard.php");
	} else {
		echo "Invalid username or password.";
	}

	$conn->close();
}


 ?>