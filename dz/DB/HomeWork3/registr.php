<?php
session_start();
$dbname = "HomeWork";
$login = "root";
$passSql = "";
$name=$_POST['login'];
$pass=$_POST['pass'];
$hello = "Введите данные для регистрации или войдите, если уже регистрировались:";
$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $passSql);
$AddNamePassSql="INSERT INTO `user`(`login`, `password`) VALUES ($name,$pass)";
$namePassSql = "SELECT `login`, `password` FROM `user`";
if ($_POST['register'] and isset($name) and $name != "" and isset($pass) and $pass != "") {
	foreach ($dataBase->query($namePassSql) as $valueArr) {
		$namePassArr[]=$valueArr;
		if ($valueArr['login'] == $name and $valueArr['password'] == $pass) {
			$hello = "Такой пользователь уже существует в базе данных.";
		}
	}
	$dataBase->exec($AddNamePassSql);
	$_SESSION['name'] = $name;
	$_SESSION['pass'] = $pass;
	//header("location: index.php");
}elseif ($_POST['register']) {
	$hello ="Ошибка регистрации. Введите все необхдоимые данные.";
	}
if ($_POST['sign_in']) {
	foreach ($dataBase->query($namePassSql) as $valueArr) {
	$namePassArr[]=$valueArr;
		if ($valueArr['login'] == $name and $valueArr['password'] == $pass) {
			$_SESSION['name'] = $name;
			$_SESSION['pass'] = $pass;
			header("location: index.php");
		}elseif ($_POST['sign_in']) {
			$hello ="Ошибка входа. Введите все необхдоимые данные.";
			}

	}
}
?>

<!Doctype html>
<html>
	<header>
		<title>ToDo</title>
	</header>
	<body>
		<p><?=$hello?></p>
		<form action="registr.php" method="POST">			
			<input type="text" name="login">
			<input type="password" name="pass">
			<input type="submit" name="sign_in" value="Вход">
			<input type="submit" name="register" value="Регистрация">
		</form>
	</body>
</html>