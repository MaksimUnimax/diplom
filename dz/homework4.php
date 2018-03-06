<?php 	

$test = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London&appid=ffbe66814f71916c07738ff15f6e694f');
//var_dump($test2);
$test2 = json_decode($test, true);
foreach ($test2 as $key => $value) {
	if ($key = 'temp') {$temp = $value;}
}
var_dump($test2);
var_dump($temp);