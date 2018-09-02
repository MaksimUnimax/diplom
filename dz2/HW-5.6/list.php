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
		foreach ($list as $numb => $name) {
			$count = $numb + 1;
			if (empty($_GET["numb"]) == $numb) {
				//unlink("$dir/$name");
			}
		?>
			<ul>
				<li><?=$name?><a href="list.php?numb=<?=$numb?>"> Удалить</a></li>
			</ul>
		<?
		}
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