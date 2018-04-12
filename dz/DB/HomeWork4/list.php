<?php
session_start();
$dbname = "HomeWork";
$login = "root";
$pass = "";
$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $pass);
$showTable = "SHOW TABLES";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Список</title>
</head>
<body>
	<h2>Список таблиц:</h2>
	<table>
		<?php 
			foreach ($dataBase->query($showTable) as $key => $value) {
				$i = $i+1;
				echo "<tr>
						<td>$i) $value[Tables_in_homework] <a href=table.php?int=$i>Редактировать</a></td>
					  </tr>";
			}
		?>
	</table>
</body>
</html>