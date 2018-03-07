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
			foreach ($user as $key => $value) : 
				foreach ($value as $key2 => $value1) : ?>
					<tr>
						<td>имя <?=$value[firstName] ?></td>
					</tr>
				<!-- 	<tr>
						<td>Фамилия <?=$value ?></td>
					</tr>
					<tr>
						<td>Адрес <?=$value[0]  . ' ' . $value[1] . ' ' . $value[2] ?></td>
					</tr>
					<tr>
						<td>Номер телефона <?=$user[phoneNumbers][0] . ', ' . $user[phoneNumbers][1]?></td>
					</tr> -->
				 <?php endforeach; ?>
			<?php endforeach; ?>

		</table>
	</body>
</html>