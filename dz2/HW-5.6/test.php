<?php
require("function.php");
$countIf = 0;
$countFor = 0;
$NumbTest = $_GET["NumbTest"];
$dir = __DIR__ . '/tests';
$list = GetListTest($dir);
$QwestCount = 0;
foreach ($list as $numb => $test) {
 	$number = $numb + 1;
 	$checkNumb[] = $number;
}
if (!in_array($NumbTest, $checkNumb) && $_GET["chek"] != 1){
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

<?php
if (array_key_exists("NumbTest", $_GET)){ 
?>

	<form action="test.php" method="GET">
	<?php
	foreach ($list as $numb => $test) {
	$number = $numb + 1;
		if ($NumbTest == $number) {
			$file = GetTest($dir,$NumbTest);
			foreach ($file as $count => $test) {
					$printCount = $test["Вот сюда надо написать Вопрос =>"];
					?>
					<fieldset>
					<legend><?="$printCount"?></legend>
					<?php
					foreach ($test as $qwest => $answer) { 
						if ($QwestCount >= 1) {
					?>
						<input type=radio name=<?="$answer"?> value=<?="$NumbTest"?> >  <?="$qwest"?>  <br/>
					<?php
						}$QwestCount += 1;
					}$QwestCount = 0;
				?>	
					</fieldset>
				<?php
			}
		}
	}echo " <br/> <input type=submit value=Ответить> <br/> <input type=hidden name=chek value=$NumbTest > </form>";
}
if (array_key_exists("chek", $_GET)){
			$NumbTest = $_GET["chek"];
			$file = GetTest($dir,$NumbTest);
			foreach ($list as $numb => $test) {
			$number = $numb + 1;
				foreach ($file as $count => $test) {
					if($number == $_GET["chek"]) {
						$countIf += 1;
						$printCount = $test["Вот сюда надо написать Вопрос =>"];
						foreach ($_GET as $key => $value) {
							$countFor += 1;
							array_push($_GET, "$countIf");
							if ($countIf == $countFor){
								if ($key == "yes"){
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
<p><a href="admin.php">Добавить тест</a></p>
<p><a href="list.php">Список тестов</a></p>
<p><a href="index.php?check=1">Выйти</a></p>
	</body>
</html>