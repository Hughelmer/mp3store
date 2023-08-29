<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Login</title>
	</head>

	<body>
		<form action="login_process.php" method="POST">
			<h2>Login</h2>
			<input type="text" name="username" placeholder="Username" required><br>
			<input type="password" name="password" placeholder="Password" required><br>
			<button type="submit">Login</button>
		</form>
	</body>
</html>