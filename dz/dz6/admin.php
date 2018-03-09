<?php 
	move_uploaded_file($_FILES['test']['tmp_name'],'list.php');
	//var_dump('');
?>
<html>
	<h2>Загрузите тест.</h2>
	<form action="admin.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="test" />
		<input type="submit" value="Отправить" />
	</form>
</html>