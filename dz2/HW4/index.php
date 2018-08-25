<?

$file_ad = "test1.json";
$file_js = file_get_contents("$file_ad");
$file = json_decode($file_js, true);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Table</title>
	</head>
	<body>
		<table>
			<?
			foreach ($file as $key => $value) { 
			?>
					<tr>
						<td>Имя <?=$value['firstName'] ?></td>
						<td>Фамилия <?=$value['lastName'] ?></td>
						<td>Адрес <?=$value['address']?></td>
						<td>Номер телефона <?=$value['phoneNumber']?></td>
					</tr>
			<?
			}	
			?>	
		</table>
	</body>
</html>