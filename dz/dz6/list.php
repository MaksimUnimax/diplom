<?php
session_start();
$dir = 'tests';
$list = scandir($dir);
$NumFile = $_GET['number'];
foreach ($list as $key => $value) {
	if ($key > 1){
	echo ++$i . ' ' . "<a href='http://localhost/dz/dz6/test.php?number=$i'>" . $value . "</a>" . '<br/>';
		if ($i == $NumFile){
			unlink("$dir/$value");
		}
	}

};


?>
<!Doctype html>
<html>
	<header>
		<title>Список</title>
	</header>
	<body>
		<?php 
		if($_SESSION['admin']) {
		echo 	
		'<h2>Для удаления введите номер теста</h2>
		<form action="list.php" method="GET" >
		    <input type="text" name="number" />
		    <input type="submit" value="Отправить" />
		</form>';
		}?>
		<p><a href="form.php">Выйти</a></p>	
	</body>
</html>