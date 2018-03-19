<?php
	session_start();
	if ($_POST['login'] == 'admin' && $_POST['pass'] == 'admin'){
	$admin = $_POST['login'];
	header("Location: admin.php");
	$_SESSION['admin'] = $admin;
	exit();
	}
	if (isset($_POST['login'])){
	header("Location: list.php");
	$user = $_POST['login'];
	$_SESSION['user'] = $user;
	}	

?>

<!Doctype html>
<html>
	<header>
		<title>Авторизация</title>
	</header>
	<body>
		<h2>Введите логин и пароль</h2>
		  <form action="form.php" method="POST" >
		  	<label >Логин
		    <input type="login" name="login" />
		    </label>
		    <label>Пароль
		    <input type="password" name="pass" />
		    </label>
		    <input type="submit" value="Отправить" />
		  </form>
	</body>
</html>