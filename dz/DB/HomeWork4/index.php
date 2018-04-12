<?php
session_start();
$dbname = "HomeWork";
$login = "root";
$pass = "";
$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $pass);
if ($_GET['incr']){
	$_SESSION['get']++;
	header("location: index.php");
}elseif ($_GET['disc'] && $_SESSION['get'] > 0) {
	$_SESSION['get']--;
	header("location: index.php");
}
$i=$_SESSION['get'];
foreach ($_POST as $keyArr => $valueArr) {
	if (is_int($keyArr)) {
		$tableArr[]=$valueArr;
	}
}
$newTable = "CREATE TABLE `$_POST[name]` (
			`$tableArr[0]` int(11) NOT NULL 
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
if(!empty($_POST)) { 
   	$dataBase->exec($newTable);
   }
if(!empty($_POST)) {
	foreach ($tableArr as $keys => $value) {
		$DataChange = "ALTER TABLE `$_POST[name]` ADD `$value` INT";
		$dataBase->exec($DataChange);
	}
}
// $newtable = "CREATE TABLE `new` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `user_id` int(11) NOT NULL,
//   `assigned_user_id` int(11) DEFAULT NULL,
//   `description` text NOT NULL,
//   `is_done` tinyint(4) NOT NULL DEFAULT '0',
//   `date_added` datetime NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
// $dataBase->exec($newtable);
?>

<!Doctype html>
<html>
	<header>
		<title>DataBase</title>
	</header>
	<body>
		<h2>Создайте таблицу</h2>
		<table>
			<tr>
				<?if ($_SESSION['get'] > 0 ) {
						while ($b != $i) {
						echo "<th>Название колонки</th>";
						$b++;
						}
					}
				?>
				<th>
					<a href=<?="?incr=1"?>>Добавить колонку</a>
					<a href=<?="?disc=1"?>>Убрать колонку</a>
				</th>
			</tr>
			<tr><form action="index.php" method="POST">
					<?if ($_SESSION['get'] > 0) {
						while ($c != $b) {
						$c++;
						echo "<td> 
						 		<input type=text name=$c>
							  </td>";
						}
					}
					?>
					<td>
						<input type="text" name="name" placeholder="Название таблицы">
						<input type="submit" name="" value ="Создать">
					</td>
				</form>
			</tr>
			
		</table>
		<h2><a href="list.php">Список таблиц</a></h2>
	</body>
</html>

