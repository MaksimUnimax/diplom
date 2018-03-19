<?php 
 	session_start();
 	 if(!$_SESSION['admin']){
 		header("HTTP/1.1 403");
 		exit();
 	}
 	
	$uploads_dir = "tests";
	foreach ($_FILES["test"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        $tmp_name = $_FILES["test"]["tmp_name"];
	        $name = basename($_FILES["test"]["name"]);
	        move_uploaded_file($tmp_name, "$uploads_dir/$name");	  
	    }
	}
	?> 

<html>
	<h2>Загрузите тест.</h2>
	<form action="admin.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="test" />
		<input type="submit" value="Отправить" />
	</form>
	<p><a href="test.php"> Перейдти к тестам</a></p>
</html>
