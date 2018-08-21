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
					<? 
						echo "<td>" ."Имя". "</td>";
						echo "<td>" . $value["firstName"] . "</td>";
					?>
				</tr>
				<tr>
					<? 
						echo "<td>" ."Фамилия". "</td>";
						echo "<td>" . $value["lastName"] . "</td>";
					?>
				</tr>
				<tr>
					<? 
						echo "<td>" ."Адрес". "</td>";
						echo "<td>" . $value["address"] . "</td>";
					?>
				</tr>
				<tr>
					<? 
						echo "<td>" ."Телефон". "</td>";
						echo "<td>" . $value["phoneNumber"] . "</td>";
					?>
				</tr>
		</table>
	</body>
</html>
<?
}
?>