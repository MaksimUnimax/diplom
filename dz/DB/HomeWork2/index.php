<?php
session_start();
$dbname = "HomeWork";
$login = "root";
$pass = "";
$about = $_POST['about'];
$id = $_GET['id'];
$doneUpd = $row['is_done'];
$done = 'Не выполнено'; 
$sell = "Отправить";
$postName = "about";
$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $pass);
$sql = "INSERT INTO `tasks`( `description`, `is_done`) VALUES ('$about',0)";
$sql1 = "SELECT * FROM `tasks`";
$del = "DELETE FROM `tasks` WHERE id like '$id'";
$update = "UPDATE `tasks` SET is_done=1 where id like '$id'";
$updAll = "UPDATE `tasks` SET description='$_POST[descrip]' where id like '$_SESSION[id]'";
$updSel = "SELECT description FROM `tasks` where id like '$id'";
if (isset($about) and $about != "") {
	$dataBase->exec($sql);
	header("location: index.php");	
}
// var_dump($descrip);
// var_dump($_POST);
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
<?php
		if ($_GET['action'] == 3) {
			foreach($dataBase->query($updSel) as $rowOne){
			$descrip = $rowOne;
			}
			$sell = "Сохранить";
			$postName = "descrip";
			$_SESSION['id'] = $id;
			$_SESSION['descrip'] = $descrip[0];
		}
?>
		<form action="index.php" method="POST">
			<input type="text" name=<?php echo $postName; ?> plaseholder= "Описание задачи" value=<?php echo $descrip[0]; ?> >
			<input type="submit" value=<?= $sell?>>
		</form>
	</div>
	<div style="float: left; margin-left: 20px;">
		<form action="index.php" method="Post">
			<select name="sort">
				<option value="date">Дата добавления</option>
				<option value="done">Статус</option>
				<option value="description">Описание</option>
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
var_dump($_POST['descrip']);echo "<br/>";
var_dump($descrip);echo "<br/>";
var_dump($descrip[0]);echo "<br/>";
var_dump($_SESSION['id']);echo "<br/>";
var_dump($_SESSION['descrip']);echo "<br/>";
					if (isset($_POST['descrip'])) {
						$dataBase->exec($updAll);
					}
					if ($_GET['action'] == 1) {
				    	$dataBase->exec($update);
				    }
				    if ($_GET['action'] == 2) {
				    	$dataBase->exec($del);
				    }
				    foreach($dataBase->query($sql1) as $row) {
				    	if($row['is_done'] == 1) {
				    		$done = 'Выполнено';
				    	}else {
				    		$done = 'Не выполнено';
				    	}
				   
				    	 echo "<tr>
				 		 <td>$row[description]</td>
				 		 <td>$row[date_added]</td>
				 		 <td>$done</td>
				 		 <td><a href=?id=$row[id]&action=1>Выполнить</a> <a href=?id=$row[id]&action=2>Удалить</a> <a href=?id=$row[id]&action=3>Редактировать</a></td>
				 		 </tr>";				 		 				 		
					}
?>
		</table>
	</div>
</body>