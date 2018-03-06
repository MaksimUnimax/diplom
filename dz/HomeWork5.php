<?php
$test = file_get_contents('test.json');

$user = json_decode($test, 'true');
var_dump($user);
?>
<html>
	<head></head>
	<body>
		<h2>Пользователь</h2>
		<?php 
			foreach ($user as $key => $value) : ?>
		<table>
			<tr>
				<td>Имя <?=$value ?></td>
			</tr>
			<tr>
				<td>Фамилия <?=$value ?></td>
			</tr>
			<tr>
				<td>Адрес <?=$value[0]  . ' ' . $value[1] . ' ' . $value[2] ?></td>
			</tr>
			<tr>
				<td>Номер телефона <?=$user[phoneNumbers][0] . ', ' . $user[phoneNumbers][1]?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>