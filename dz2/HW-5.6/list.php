<?php
require("function.php");
$dir = __DIR__ . '/tests';
$list = GetListTest($dir);
var_dump($_SESSION["name"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Список</title>
</head>
<body>
	<?php
	if(CheckUser()) {
		?>
		<form action="list.php" method ="GET">
			<p>Введите номер теста для удаления</p>
			<input type="text" name="delete">
			<input type="submit">
		</form>

		<ol><?php
		foreach ($list as $numb => $name) {
			$NumbTest = $numb + 1;
			$NumbDel = $_GET["delete"];
			if ($NumbTest == $NumbDel) {
				unlink("$dir/$name");
			}
				?><li><?php echo $name?></li><?php
			}
		
		?></ol><?php
	}else {
		foreach ($list as $numb => $name) {
		?>
			<ul>
				<li><?php echo $name?></li>
			</ul>
		<?php
		}
	}
	?>
	<p><a href="admin.php">Добавить тест</a></p>
	<p><a href="test.php">Решить тест</a></p>
	<p><a href="index.php?check=1">Выйти</a></p>
</body>
</html>