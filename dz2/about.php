<?
$name = Maksim;
$secName = Yagofarov;
$age = 31;
$adress = Chelyabinsk;
$mail = "unymax2014@gmail.com";
$about = "Little man in big world";

$user = rand(0,100); 
echo "$user <br/>";
$numberOne = 1; 
$numberTwo = 1; 
while ($numberOne < $user) {
	$numberThree = $numberOne;
	$numberOne+=$numberTwo;
	$numberTwo = $numberThree;
};
if ($numberOne > $user) {
		echo "Задуманное число не входит в числовой ряд";
	}elseif ($numberOne == $user) {
		echo "Задуманное число входит в числовой ряд";
};
?>


<!DOCTYPE>
<html>
	<head>
		<title>About</title>
	</head>
	<body>
		<h1>About</h1>
		<table border='1', cellpadding = '5', cellspacing = '0'>
			<tr>
				<td>Name</td>
				<td>SecName</td>
				<td>age</td>
				<td>adress</td>
				<td>mail</td>
				<td>about</td>
			</tr>
				<tr>
				<td><?=$name?></td>
				<td><?=$secName?></td>
				<td><?=$age?></td>
				<td><?=$adress?></td>
				<td><?=$mail?></td>
				<td><?=$about?></td>
			</tr>
		</table>
	</body>
</html>