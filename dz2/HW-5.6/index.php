<?php
require("function.php");
$dirLog = __DIR__ . '/users';
if ($_GET["check"] == 1) {
	session_destroy();
}
if (CheckGuest()) {
	header("location: list.php");
	exit();
}

if (AssignSession($dirLog)) {
	$_SESSION["login"] = $_POST["login"];
	$_SESSION["pass"] = $_POST["pass"];
	$_SESSION["name"] = $value["name"];
	header("location: admin.php");
	exit();
}
if ($_POST["login"] && empty($_POST["pass"])) {
	$_SESSION["login"] = $_POST["login"];
	$_SESSION["name"] = $value["name"];
	header("location: test.php");
	var_dump($_SESSION["pass"]);
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
<form action="index.php" method="POST">
	<p>Login</p>
	<input type="text" name="login">
	<p>Password</p>
	<input type="password" name="pass">
	<p></p>
	<input type="submit" value="Войти">
</form>

</body>
</html>
