<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Login</title>
	</head>

	<body>
		<form action="login_process.php" method="post">
	        <label for="username">Username:</label>
	        <input type="text" id="username" name="username" required>
	        <br>
	        <label for="password">Password:</label>
	        <input type="password" id="password" name="password" required>
	        <br>
	        <input type="submit" value="Login">
	    </form>
	</body>
</html>