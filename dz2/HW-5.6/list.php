<?
require("function.php");
$dir = 'tests';
$list = array_slice(scandir($dir), 2);
var_dump($_SESSION["login"]);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Список</title>
</head>
<body>
	<?
	foreach ($list as $numb => $name) {
	?>
		<ul>
			<li><?=$name?></li>
		</ul>
	<?
	}
	?>
	<p><a href="admin.php">Добавить тест</a></p>
	<p><a href="test.php">Решить тест</a></p>
	<p><a href="index.php?check=1">Выйти</a></p>
</body>
</html>