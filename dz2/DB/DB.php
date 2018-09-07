<?php 
require("func.php");
$user = "root";
$pass = "";
$dbh = new PDO('mysql:host=localhost;dbname=HomeWork', $user, $pass);
$qwer = $dbh->prepare("SELECT * FROM books");
$qwer->execute();
$result = $qwer->fetchAll(PDO::FETCH_ASSOC);

$search = new Filtr;
if (empty(!$_GET["ISBN"])) {
	$isbn = $_GET["ISBN"];
	$result = $search -> getIsbn($dbh,$isbn);
}elseif(empty(!$_GET["name"])) {
	$name = $_GET["name"];
	$result = $search -> getName($dbh,$name);
}elseif(empty(!$_GET["author"])) {
	$author = $_GET["author"];
	$result = $search -> getAuthor($dbh,$author);
}
if(empty($result)) {
		echo "Ничего не найдено" . " " . "<a href='DB.php'>Назад</a>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Books</title>
	</head>
	<body>
		<h1>Библиотека успешного человека</h1>
		<form action="DB.php" method="GET">
			<input type="text" name = "ISBN" value="ISBN">
			<input type="text" name = "name" value="Название книги">
			<input type="text" name = "author" value="Автор">
			<input type="submit" value="Поиск">
		</form>
		<p></p>
		<table border="1">
			<tr>
				<th>Название</th>
				<th>Автор</th>
				<th>Год</th>
				<th>ISBN</th>
				<th>Жанр</th>
			</tr>
			<?php 
				foreach ($result as $key => $value) {
			?>
			<tr>
				<th><?php echo $value["name"] ?></th>
				<th><?php echo $value["author"] ?></th>
				<th><?php echo $value["year"] ?></th>
				<th><?php echo $value["isbn"] ?></th>
				<th><?php echo $value["genre"] ?></th>
			</tr>	
			<?php		
					}	
			 ?>
		</table>
	</body>
</html>