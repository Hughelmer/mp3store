<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	//Need to Hash Password

	$conn = new mysqli("localhost", "username", "password", "database");
	$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
	if ($conn->query($sql) == TRUE) {
		echo "Registration successfully"
	} else {
		echo "Error:" . $conn->error;
	}
	$conn->close();
}


 ?>