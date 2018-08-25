<?

$fileAd = "test1.json";
$fileJs = file_get_contents("$fileAd");
$file = json_decode($fileJs, true);
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