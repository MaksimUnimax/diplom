<?php 	

$test = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London&appid=ffbe66814f71916c07738ff15f6e694f');
$test2 =json_decode($test, true);
var_dump($test);