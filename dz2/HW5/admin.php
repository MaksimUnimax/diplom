<?
$uploadDir = "tests";
$name = $_FILES["test"]["name"];
move_uploaded_file($_FILES["test"]["tmp_name"], "$uploadDir/$name");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Загрузка</title>
</head>
<body>
	<p>Загрузите тест</p>
	<form enctype="multipart/form-data" action="admin.php" method="POST">
		<input type="file" name="test">
		<input type="submit" value="Отправить">
	</form>
</body>
</html>