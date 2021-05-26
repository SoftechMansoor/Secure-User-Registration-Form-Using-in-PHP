<?php
include'db_conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="signup.php" method="POST">
		<input type="text" name="first" placeholder="First Name">
		<br>
		<input type="text" name="last" placeholder="Last Name">
		<br>
		<input type="text" name="email" placeholder="E mail">
		<br>
		<input type="text" name="uid" placeholder="Username">
		<br>
		<input type="Password" name="pwd" placeholder="Password">
		<br>
		<button type="submit" name="submit">Sign Up</button>
	</form>

</body>
</html>

