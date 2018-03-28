<?php 
	$dbname = "HomeWork";
	$login = "root";
	$pass = "";
	$dataBase = new PDO("mysql:host=localhost;dbname=HomeWork", $login, $pass);
    $sql = "SELECT * FROM books";
	var_dump($dataBase->query($sql));
    foreach($dataBase->query($sql) as $row) {
       print_r($row);
     };
