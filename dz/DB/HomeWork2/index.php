<?php

$dbname = "HomeWork";
$login = "root";
$pass = "";
$about = $_POST['about'];
$id = $_GET['id'];
$doneUpd = $row['is_done'];
$done = 'Не выполнено'; 
$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $pass);
$sql = "INSERT INTO `tasks`( `description`, `is_done`) VALUES ('$about',0)";
$sql1 = "SELECT * FROM `tasks`";
$del = "DELETE * FROM `tasks` WHERE id like '$id'";
$update = "UPDATE `tasks` SET is_done=1 where id like '$id'";
var_dump($about);
var_dump($_GET);
$dataBase->exec($sql);

?>

<!Doctype html>
<head>
	<title>ToDo</title>
	<style>
		th,td {
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>Список дел</h1>
	<div style="float: left">
		<form action="index.php" method="POST">
			<input type="text" name="about" plaseholder= "Описание задачи">
			<input type="submit" value="Добавить">
		</form>
	</div>
	<div style="float: left; margin-left: 20px;">
		<form action="index.php" method="Post">
			<select name="sort">
				<option value="date">Дата добавления</option>
				<option value="done">Статус</option>
				<option value="description">Описанию</option>
			</select>
			<input type="submit" value="Отсортировать">
		</form>
	</div>
	<div style="clear: both"></div>
	<div>
		<table style="margin-top: 20px; border: 1px solid black;border-collapse: collapse;" >
			<tr>
				<th>Описание задачи</th>
				<th>Дата добавления</th>
				<th>Статус</th>
				<th></th>
			</tr>
<?php 					
				    foreach($dataBase->query($sql1) as $row) {
				    	if ($_GET['action']) {
				    		$dataBase->exec($update);
				    	}
				 		echo "<tr>
				 		 <td>$row[description]</td>
				 		 <td>$row[date_added]</td>
				 		 <td>$row[is_done]</td>
				 		 <td><a href=?id=$row[id]&action=1>Выполнить</a></td>
				 		 </tr>";
					}

?>					
		</table>
	</div>
</body>