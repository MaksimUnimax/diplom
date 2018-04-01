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
 	// var_dump($isbnArr);
 	// var_dump($nameArr);
 	// var_dump($autorArr);
 	// if (is_array($autorArr) and is_array($isbnArr)) {
 	// 	$ferstRes = array_intersect($autorArr,$isbnArr);
 	// }
 	// var_dump($ferstRes);
if (is_array($autorArr) and is_array($nameArr) and is_array($isbnArr)){
 	$sumArr = array_merge($nameArr,$isbnArr,$autorArr);
 }
 	elseif (is_array($autorArr) and is_array($nameArr)) {
 		$sumArr1 = array_merge($autorArr,$nameArr);
 		$sumArr = array_intersect($autorArr,$nameArr);
 	} 
 		elseif (is_array($autorArr) and is_array($isbnArr)) {
 			$sumArr2 = array_merge($autorArr,$isbnArr);
 		}	
 			elseif (is_array($nameArr) and is_array($isbnArr)) {
 				 $sumArr3 = array_merge($nameArr,$isbnArr);
 			} 
 	//  $end[] = array_unique($sumArr);
 	// var_dump($end);
 			var_dump($sumArr1);
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
