<?php
require 'functions.php';
if (isset($_POST['poster'])) {
$username = isset($_POST['username']) ? mysql_real_escape_string($_POST['username']) : '';
$password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) : '';
$db->query('SELECT * FROM user WHERE user_username = ' . $username . ' AND user_password = ' . $password . ';');
if (mysqli_num_rows($db->query) == 1) {
	echo 'Successfully logged in! Do some session stuff here.';
} else {
	echo "<div style=\"background-color:#cc0000\";>\n";
	echo "Username or password invalid!\n";
	echo "</div>";
}
}
?>
<html>
<head>
</head>
<body>
<h1>Log in</h1>
<form method="post">
<table>
	<tr>
		<td><label for username>Username:</label></td>
		<td><input type="text" id="username" name="username" /></td>
	<tr>
		<td><label for="password">Password:</label></td>
		<td><input type="password" id="password" name="password" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="poster" /></td>
	</tr>
</table>
</form>
