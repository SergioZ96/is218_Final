<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "LocalFinalProj";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if (isset($_POST['username'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM User WHERE username = '".$username."'AND password = '".$password."' LIMIT 1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res) == 1) {
		echo "You have successfully logged in.";
		exit();
	} else {
		echo "Invalid login information. Please return to the previous page.";
		exit();
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="login.php">
Username: <input type="text" name="username" /><br /><br />
Password: <input type="password" name="password" /><br /><br />
<input type="submit" name="submit" value="Log In" />
</form>
</body>
</html>