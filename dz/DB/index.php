<?php 
	$ISBN = $_GET['ISBN'];
	$name = $_GET['name'];
    $autor = $_GET['autor'];
	$dbname = "HomeWork";
	$login = "root";
	$pass = "";
	$dataBase = new PDO("mysql:host=localhost;dbname=$dbname", $login, $pass);
    $sql = "SELECT * FROM books";
    $IsbnQw = "SELECT * FROM `books` WHERE isbn like '%$ISBN%' ";
    $nameQw = "SELECT * FROM `books` WHERE name like '%$name%' ";
    $autorQW = "SELECT * FROM `books` WHERE author like '%$autor%' ";
if (isset($autor) and $autor !== "") {
    foreach($dataBase->query($autorQW) as $rowAut) {
 		$autorArr[] = $rowAut;
     }
 };
 if (isset($name) and $name !== "") {
    foreach($dataBase->query($nameQw) as $rowName) {
 		$nameArr[] = $rowName;
     }
 };
 if (isset($ISBN) and $ISBN !== "") {
    foreach($dataBase->query($IsbnQw) as $rowIs) {
 		$isbnArr[] = $rowIs;
     }
 };

?>
<!Doctype html>
<html>
	<header>
		<title>Books</title>
	</header>
	<body>
		<form action="index.php" method="GET">
			<input type="text" name="ISBN" placeholder="ISBN">
			<input type="text" name="name" placeholder="Название книги">
			<input type="text" name="autor" placeholder="автор">
			<input type="submit" value="Поиск">
		</form>
	</body>
</html>
