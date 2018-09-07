<?php 
$user = "root";
$pass = "";
$dbh = new PDO('mysql:host=localhost;dbname=HomeWork', $user, $pass);
$qwer = $dbh->prepare("SELECT * FROM books");
$qwer->execute();
$result = $qwer->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Books</title>
	</head>
	<body>
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