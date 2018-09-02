<?
require("function.php");
$uploadDir = "tests";
$name = $_FILES["test"]["name"];
move_uploaded_file($_FILES["test"]["tmp_name"], "$uploadDir/$name");
if (array_key_exists("test", $_FILES)) {
	$_FILES = 0;
	header("Location:list.php");
}
//var_dump($_SESSION["login"]);
if (CheckUser()) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Загрузка</title>
</head>
<body>
	<p>Загрузите тест</p>
	<form enctype="multipart/form-data" action="admin.php" method="POST">
		<input type="file" name="test">
		<input type="submit" value="Отправить">
	</form>
	<p><a href="index.php?check=1">Выйти</a></p>
		<p><a href="list.php">К списку тестов</a></p>
		<p><a href="test.php">Решить тест</a></p>
	<?}else {
		header("HTTP/1.1 404 Not Found");
		?>
		<p><a href="index.php?check=1">Для добавления тестов введите логин и пароль</a></p>
		<p><a href="list.php">К списку тестов</a></p>
		<p><a href="test.php">Решить тест</a></p>
	<?
	}
	?>
</body>
</html>
