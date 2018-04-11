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
$sql = "INSERT INTO `task`( `description`, `is_done`, `user_id`) VALUES ('$about',0,$_SESSION[userId])";
$sql1 = "SELECT * FROM `task`";
$del = "DELETE FROM `task` WHERE id like '$id'";
$update = "UPDATE `task` SET is_done=1 where id like '$id'";
$updAll = "UPDATE `task` SET description='$_POST[descrip]' where id like '$_SESSION[id]'";
$updSel = "SELECT description FROM `task` where id like '$id'";
$userIDSql = "SELECT id FROM `user` where login like '$_SESSION[name]' and password like $_SESSION[pass]";
$allUser =  "SELECT * FROM `user`";
$userIdName = "SELECT login FROM user INNER JOIN task ON task.user_id=user.id";
foreach($dataBase->query($userIdName) as $rowUser1) {
	$UserName[]=$rowUser1;
}
var_dump($_SESSION['pass'])	;
foreach($dataBase->query($allUser) as $rowUser) {
	$allUserName[]=$rowUser['name'];
}
foreach($dataBase->query($userIDSql) as $row) {
	$_SESSION['userId'] = $row['id'];
}
if (isset($about) and $about != "") {
	$dataBase->exec($sql);
	header("location: index.php");	
}
if (!isset($_SESSION['name'])) {
	exit("<a href=registr.php>Войдите на сайт</a>");
}
var_dump($UserName)
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
	<h1>Здравствуйте, <?=$_SESSION['name']?> Вот ваш список дел:</h1>
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
				<th>Ответственный</th>
				<th>Автор</th>
				<th>Закрепить задачу за пользователем</th>
			</tr>
<?php 				

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
				 		 <td>В процессе</td>
				 		 <td>$UserName[login]</td>
				 		 </tr>";				 		 				 		
					}
?>
		</table>
	</div>
</body>