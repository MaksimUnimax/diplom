<?php
session_start();
include('product.php');
//include('car/car.php');
var_dump($_SESSION);
?>
<!Doctype html>
<html>
	<header>
		<title>
			Shop
		</title>
	</header>
	<body>
		<h1>Добро пожаловать в Пятерочку!</h1>
		<div>
			<h2>Выберите авто</h2>
			<form action='car/car.php' method="GET" name = 'car'>
				<p> Марка<br/>
				<input type="radio" name='name' value = 'BMW'> BMW <br/>
				<input type="radio" name='name' value = 'LADA'> LADA <br/>
				</p>
				<p> Цвет<br/>
				<input type="radio" name='color' value = 'white'> Белый <br/>
				<input type="radio" name='color' value = 'red'> Красный <br/>
				</p>
				<p>Коробка передач<br/>
				<input type="radio" name='transmission' value = 'auto'> Автомат <br/>
				<input type="radio" name='transmission' value = 'noauto'> Ручная <br/>
				</p>
				<input type="submit" value="Добавить в корзину">
			</form>
		</div>
	</body>
</html>



