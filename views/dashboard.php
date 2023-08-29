<?php 

session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
}

$username = $_SESSION["username"];

 ?>

 <!DOCTYPE html>
 <html>
	 <head>
	 	<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<link rel="stylesheet" type="text/css" href="styles.css">
	 	<title>Dashboard</title>
	 </head>

	 <body>
	     <h2>Welcome, <?php echo $username; ?>!</h2>
	     <a href="logout.php">Logout</a>
	 </body>
 </html>