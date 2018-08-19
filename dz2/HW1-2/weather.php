<?php 	
$test = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London&units=metric&appid=ffbe66814f71916c07738ff15f6e694f');
$test2 = json_decode($test, true);
var_dump($test2);
?>

<html>
	<h2><?= $test2['name'] ?></h2>
	<table>
		<tr>
			<td>Температура</td>
			<td>Ветер</td>
			<td>Осадки</td>
		</tr>
		<tr>
			<td><?= $test2['main']['temp'] . ' ' . 'C'?></td>
			<td><?= $test2['wind']['speed'] . ' ' . 'M/C'?></td>
			<td><?= $test2['weather'][0]['description'] ?></td>
		</tr>
	</table>
</html>