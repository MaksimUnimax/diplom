<?
$NumbTest = $_GET["NumbTest"];
$dir = 'tests';
$list = array_slice(scandir($dir), 2);
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
if (array_key_exists("NumbTest", $_GET)){ 
	$NumbTest = $_GET["NumbTest"];
?>
	<form action="test.php" method="GET">
	<?
	foreach ($list as $numb => $test) {
	$number = $numb + 1;
		if ($NumbTest == $number) {
			$fileName = $list[$numb];
			$fileJs = file_get_contents("tests/$fileName");
			$file = json_decode($fileJs,true);
			foreach ($file as $count => $test) {
					$printCount = $test["Вот сюда надо написать Вопрос =>"];
					?>
					<fieldset>
					<legend><?="$printCount"?></legend>
					<?
					$test = array_slice($test, 1);
					foreach ($test as $qwest => $answer) { 
						 $answ = 1;
						 if(is_array($answer)) {
						 	$answ = 2;
						 }
					?>
						<input type=radio name=<?="$answer"?> value=<?="$NumbTest"?> >  <?="$qwest"?>  <br/>
					<?
					}
					?>
					</fieldset>
					<?
			}
		}
	}echo " <br/> <input type=submit value=Ответить> <br/> <input type=hidden name=chek value=$NumbTest > </form>";
}
if (array_key_exists("chek", $_GET)){
			foreach ($list as $numb => $test) {
			$number = $numb + 1;
			$fileName = $list[$numb];
			$fileJs = file_get_contents("tests/$fileName");
			$file = json_decode($fileJs,true);
				foreach ($file as $count => $test) {
					if($number == $_GET["chek"]) {
						$countIf += 1;
						$printCount = $test["Вот сюда надо написать Вопрос =>"];
						foreach ($_GET as $key => $value) {
							$countFor += 1;
							array_push($_GET, "$countIf");
							if ($countIf == $countFor){
								if ($key == "Array"){
									echo "<p> $printCount (Верно)</p> ";
								}else {
									echo "<p> $printCount (Неверно)</p> ";
								}
							}
						}$countFor = 0;
					}
				}$countIf = 0;
			}		
}
?>
	</body>
</html>