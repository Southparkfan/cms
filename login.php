<?php
/*
** Login page.
** Since: 09/2014

** This file is part of Southparkfan's cms.

** Southparkfan's cms is free software: you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation, either version 3 of the License, or
** (at your option) any later version.

** Southparkfan's cms is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
** GNU General Public License for more details.

** You should have received a copy of the GNU General Public License
** along with Southparkfan's cms.  If not, see <http://www.gnu.org/licenses/>.

*/

require 'functions.php';
include 'header.php';

if (isset($_POST['poster'])) {
		$username = isset($_POST['username']) ? mysqli_real_escape_string($db->DBconnection, $_POST['username']) : '';
		$password = isset($_POST['password']) ? mysqli_real_escape_string($db->DBconnection, $_POST['password']) : '';
		$db->query("SELECT * FROM user WHERE user_username = '$username' AND user_password = '$password'");

	if (mysqli_num_rows($db->query) == 1) {
		echo 'Successfully logged in!';
		$dbrow = mysqli_fetch_assoc($db->query);
		$_SESSION['userid'] = $row['user_id'];
		$_SESSION['username'] = $row['user_name'];
	} else {
		echo "<div style=\"background-color:#cc0000\";>\n";
		echo "Username or password invalid!\n";
		echo "</div>";
	}
}
?>
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
