<?
require("function.php");
$dir = 'tests';
$list = GetListTest($dir);
var_dump($_SESSION["name"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Список</title>
</head>
<body>
	<?
	if(CheckUser()) {
		?>
		<form action="list.php" method ="GET">
			<p>Введите номер теста для удаления</p>
			<input type="text" name="delete">
			<input type="submit">
		</form>

		<ol><?
		foreach ($list as $numb => $name) {
			$NumbTest = $numb + 1;
			$NumbDel = $_GET["delete"];
			if ($NumbTest == $NumbDel) {
				unlink("$dir/$name");
			}
				?><li><?=$name?></li><?
			}
		
		?></ol><?
	}else {
		foreach ($list as $numb => $name) {
		?>
			<ul>
				<li><?=$name?></li>
			</ul>
		<?
		}
	}
	?>
	<p><a href="admin.php">Добавить тест</a></p>
	<p><a href="test.php">Решить тест</a></p>
	<p><a href="index.php?check=1">Выйти</a></p>
</body>
</html>