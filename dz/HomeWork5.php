<?php
$test = file_get_contents('test.json');

$user = json_decode($test, 'true');
?>
<html>
	<head></head>
	<body>
		<h2>Пользователь</h2>

		<table>
			<tr>
				<td>Имя <?=$user[0][firstName]?></td>
			</tr>
			<tr>
				<td>Фамилия <?=$user[1][lastName]?></td>
			</tr>
			<tr>
				<td>Адрес <?=$user[2][address][city]  . ' ' . $user[2][address][streetAddress] . ' ' . $user[2][address][postalCode] ?></td>
			</tr>
			<tr>
				<td>Номер телефона <?=$user[3][phoneNumbers][0] . ', ' . $user[3][phoneNumbers][1]?></td>
			</tr>
		</table>

	</body>
</html>