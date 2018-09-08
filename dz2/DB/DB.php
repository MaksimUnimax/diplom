<?php 
require('func.php');
$user = 'root';
$pass = '';
$get = $_GET;
$dbh = new PDO('mysql:host=localhost;dbname=HomeWork', $user, $pass);
$qwer = $dbh->prepare("SELECT * FROM books");
$qwer->execute();
$result = $qwer->fetchAll(PDO::FETCH_ASSOC);
//var_dump($get);
			$isbnAll = $get['ISBN'];
			$authorAll = $get['author'];
			$nameAll = $get['name'];
var_dump($nameAll);
$search = new Filtr;
if (!empty($_GET['ISBN'])) {
	$isbn = $_GET['ISBN'];
	$result = $search -> getIsbn($dbh,$isbn);
}elseif(!empty($_GET['name'])) {
	$name = $_GET['name'];
	$result = $search -> getName($dbh,$name);
}elseif(!empty($_GET['author'])) {
	$author = $_GET['author'];
	$result = $search -> getAuthor($dbh,$author);
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
			<input type="text" name = "ISBN" placeholder="ISBN">
			<input type="text" name = "name" placeholder="Название книги">
			<input type="text" name = "author" placeholder="Автор">
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
				<td><?php echo $value["name"] ?></td>
				<td><?php echo $value["author"] ?></td>
				<td><?php echo $value["year"] ?></td>
				<td><?php echo $value["isbn"] ?></td>
				<td><?php echo $value["genre"] ?></td>
			</tr>	
			<?php	
					}
				if(empty($result)) {?>
			<tr>
				<td>Ничего не найдено <a href='DB.php'>Назад</a></td>
			</tr>
			<?php 
				}
			 ?>
		</table>
	</body>
</html>