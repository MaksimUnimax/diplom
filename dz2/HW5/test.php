<?
$NumbTest = $_GET["NumbTest"];
$dir = 'tests';
$list = array_slice(scandir($dir), 2);
var_dump($list);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Тест</title>
</head>
<body>
	<form method="GET">
		<p>Введите номер теста</p>
		<input type="text" name="NumbTest">
		<input type="submit" value="Отправить">
	</form>
	<?
	foreach ($list as $numb => $test) {
	$number = $numb + 1;
	if ($NumbTest == $number) {
		$fileName = $list[$numb];
		$fileJs = file_get_contents("tests/$fileName");
		$file = json_decode($fileJs,true);
		var_dump($file);
	}
}
	?>
</body>
</html>