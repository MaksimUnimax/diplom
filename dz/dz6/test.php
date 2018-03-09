<?php	
	
	//var_dump($_GET);
	$content = file_get_contents('list.php');
	$number = json_decode($content, 'true');
	var_dump($number);
	echo $number[0]["question"];
	$ques = $number[0]["question"];
	$answ1 = $number[0]["answerone"];
	$answ2 = $number[0]["answertwo"];
	$answ3 = $number[0]["answerthree"][0];
	$end = "<div> <h2>Тест</h2>
	<p>$ques</p>
		<form action='test.php' method='Post'>
			<select multiple name='answer'>
				<option value='$answ1'>$answ1</option>
				<option value='$answ2'>$answ2</option>
				<option value='$answ3'>$answ3</option>
			</select>
			<input type='submit' value='Ответ' />
		</form>	
	</div>";
?>

<html>
	<h2>Введите номер теста.</h2>
	<form action="test.php" method="GET" >
		<input type="text" name="number" />
		<input type="submit" value="Отправить" />
	</form>

	<?php
	if ($number[0]['number'] == $_GET['number']) {
	echo $end;
	}
	if ($_post['$answ3']) {
		echo 'true';
	}
	var_dump($_POST);
	?> 
</html>


