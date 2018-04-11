<?php
session_start();
$dbname = "HomeWork";
$login = "root";
$pass = "";
$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $pass);
foreach($_GET as $key => $val );
$newtable = "CREATE TABLE `new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `assigned_user_id` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `is_done` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$dataBase->exec($newtable);


if ($_GET['incr']){
	$_SESSION['get']++;
	header("location: index.php");
}elseif ($_GET['disc'] && $_SESSION['get'] > 0) {
	$_SESSION['get']--;
	header("location: index.php");
}
$i=$_SESSION['get'];

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
			<tr><form action="index.php">
					<?if ($_SESSION['get'] > 0) {
						while ($c != $b) {
						$c++;
						echo "<td> 
						 		<input type=text name=$c>
							  </td>";
						}
					}
					var_dump($_GET);
					?>
					<td>
						<input type="submit" name="all" value ="Создать">
					</td>
				</form>
			</tr>
			
		</table>
	</body>
</html>

