<?

$NumbTest = $_GET["NumbTest"];
$dir = 'tests';
$list = array_slice(scandir($dir), 2);

foreach ($list as $numb => $test) {
 	$number = $numb + 1;
 	$checkNumb[] = $number;
}

if (!in_array($NumbTest, $checkNumb)){
	header("HTTP/1.1 404 Not Found");
}	

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
?>

	<form action="test.php" method="GET">
	<?
	foreach ($list as $numb => $test) {
	$number = $numb + 1;
	$checkNumb[] = $number;
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
			}?>
			<p>Представтесь.</p>
			<input type="text" name="name" value="Введите имя"><br/>
			<?
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
									 echo "<p> $printCount (Верно) Не могу понять как засунуть сюда заголовок, для сертификата</p> "; 
								}else {
									echo "<p> $printCount (Неверно) Не могу понять как засунуть сюда заголовок, для сертификата</p> ";
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