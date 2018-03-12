<?php
$test = file_get_contents('test1.json');
$user = json_decode($test, 'true');
var_dump($user);
?>
<html>
	<head></head>
	<body>
		<h2>Пользователь</h2>	
		<table>
		<?php 
			foreach ($user as $key => $value) :  ?>
					<tr>
						<td>Имя <?=$value['firstName'] ?></td>
						<td>Фамилия <?=$value['lastName'] ?></td>
						<td>Адрес <?=$value['address']["city"] ?> . Улица <?=$value['address']["streetAddress"] ?> . Индекс <?=$value['address']["postalCode"] ?></td>
						<td>Номер телефона <?=$value['phoneNumbers'][0]?> . <?=$value['phoneNumbers'][1]?></td>
					</tr>
			<?php endforeach; ?>

		</table>
	</body>
</html>