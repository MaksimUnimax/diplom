<?
$dir = 'tests';
$list = array_slice(scandir($dir), 2);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Список</title>
</head>
<body>
	<?
	foreach ($list as $numb => $name) {
	?>
		<ul>
			<li><?=$name?></li>
		</ul>
	<?
	}
	?>
</body>
</html>