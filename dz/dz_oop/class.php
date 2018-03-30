<?php
	//Суперкласс
class Products 
{

};

class Car
{
	public $name;
	public $color;
	public $transmission;
		
	public function carSet($name, $color, $transmission) 
	{ 
	 	echo $this -> name = 'Марка'  .' '.  $name . '<br/>' . 
	 		 $this -> color = 'Цвет'  .' '.  $color . '<br/>' . 
	 		 $this -> transmission = 'Трансмиссия'  .' '.  $transmission . '<br/>';
 	}

}

$BMW = new Car;
$BMW->name = 'BMW';
echo  'Первый класс' . ' ' . $BMW -> name . '<br/>';
$LADA = new Car;
$LADA->carSet('LADA', 'white', 'auto');

//Суперкласс
class Stationery 
{

};

class Pen
{
	private $color = 'blue';
	public $price = 1;

	public function penColor($color) 
	{
		$this->color = $color;
		echo 'Второй класс' . ' ' . $color;
	}

};

$RedPen = new Pen;
$RedPen->penColor('Red');
$GoldPen = new Pen;
echo ' ' . $GoldPen -> price = 1000000 . '<br/>';

//Суперкласс
class HomeAppliances 
{

};

class TV 
{
	public $color;
	public $height;
	public $width;
	public $price;

	public function YourPrice($color, $height, $width) 
	{
			echo 'Третий класс';
			if ($color = "black/white" && $height <= 50 && $width <= 30) {
				echo $this->price = 1000 . '<br/>';
			}
			elseif ($color = "black/white" && $height > 50 && $width > 30) {
				echo $this->price = 2000 . '<br/>';
			}
			elseif ($color = "color" && $height > 50 && $width > 30) {
				echo $this->price = 3000 . '<br/>';
			}
			elseif ($color = "color" && $height > 50 && $width > 30) {
				echo $this->price = 4000 . '<br/>';
			}
			else {
				echo 'Таких параметров не существует';
			}

	}

};

$samsung = new TV;
$samsung -> YourPrice("black/white", 30, 10);
$LG = new TV;
$LG->YourPrice("color", 60, 100);

//Суперкласс
class HomeWork 
{

};

class Answer {
		private $Qwestion1;
		private $Qwestion2;

		public function AnswerOnQwestionOne($incaps) 
		{
			echo $this->Qwestion1 = $incaps;
		}
		public function AnswerOnQwestionTwo($object) 
		{
			echo $this->Qwestion2 = $object;
		}
}

$Answer1 = new Answer;
$Answer2 = new Answer;
$incaps = "Понимаю как создание каркаса программы, к которому можно потом обращаться вставляя нужные переменные. Вся логика скрипта в одном месте.";
$object = "Пока вижу только удобство в чтении программы."

?>
	<!Doctype html>
	<html>
		<head>
			<title>Ответы на дз</title>
		</head>
		<body>
			<div>
				<h2>Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании</h2>
				<p><?php $Answer1 -> AnswerOnQwestionOne($incaps); ?></p>
				<h2>Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?</h2>
				<p><?php $Answer2 -> AnswerOnQwestionTwo($object);?></p>
			</div>

<?php 

//Суперкласс
class AllProduct 
{

};

class Product 
{
	private $price;
	public $name;
	public $about;
	public $discount = 'Bread';

	public function OurPrice ($price)
	{
		if ($this -> name == $this -> discount) {
			$price = $price - ( ($price * 10 ) / 100 );
			return $this->price = $price;
		}
		else {
			return $this->price = $price;
		}
	}

};

?>
		<div>
			<table>
			<tr>
			    <th>Товар</th>
			    <th>Инфо</th>
			    <th>Стоимость, руб.</th>
		    </tr>
		    <tr>
		    	<td><? $Juice = new Product; echo $Juice->name = 'Juice' ?></td>
		    	<td><? echo $Juice->about = 'Apple' ?></td>
		    	<td><? echo $Juice->OurPrice('100');?></td>
		    </tr>
		     <tr>
		    	<td><? $Bread = new Product; echo $Bread->name = 'Bread' ?></td>
		    	<td><? echo $Bread->about = 'White' ?></td>
		    	<td><? echo $Bread->OurPrice('50');?></td>
		    </tr>

			</table>
			<p>*Товар со скидкой сегодня - Хлеб</p>
		</div>
	
	</body>

</html>
