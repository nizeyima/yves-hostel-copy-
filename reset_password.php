<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<?php
// Include yves.php file to establish database connection
include 'yves.php';
?>
<body>
	<h1>Reset Password</h1>
	<form method="post" action="reset_password.php">
		<label>Email or Username:</label><br>
		<input type="text" name="username"><br>
		<label>Contact Information:</label><br>
		<input type="text" name="contact"><br>
		<label>New Password:</label><br>
		<input type="password" name="new_password"><br>
		<label>Confirm New Password:</label><br>
		<input type="password" name="confirm_password"><br><br>
		<input type="submit" value="Reset Password">
	</form>

    <br>
  <a href="index.php">Back to Home Page</a>
  <br>
  <a href="login.php">Login</a>
</body>
</html>
