<?php 
$count = 0;
abstract class LiveInEarth
{
	protected $name;
	public $clasification;
	public $nameScientific;

	public function __construct($name,$clasification,$nameScientific)
	{
		$this -> name = $name;
		$this -> clasification = $clasification;
		$this -> nameScientific = $nameScientific;
	}

	public function isItReasonable()
	{
			if($this -> nameScientific == "HomoSapiens") {
			return "Разумный";
		}else {
			return "Неразумный";	
		}
	}

	abstract function getName(); 
}

class Human extends LiveInEarth 
{
	public function getName()
	{
		return $this -> name;
	}
}

class Cow extends LiveInEarth
{
	public function getName()
	{
		return $this -> name;
	}	
}

class Spider extends LiveInEarth
{
	public function getName()
	{
		return $this -> name;
	}
}

class Dolphin extends LiveInEarth
{
	public function getName()
	{
		return $this -> name;
	}
}

class Eagle extends LiveInEarth
{
	public function getName()
	{
		return $this -> name;
	}	
}
$BrachypelmaSmithi = new Spider("Паук-птицеед","Членистоногий","Theraphosidae");
$human = new Human("Человек","Млекопитающее","HomoSapiens");
$bosTaurus = new Cow("Голштино-фризская корова","Млекопитающее","Bos taurus");
$tursiopsTruncatus = new Dolphin("Афалин","Млекопитающее","Tursiops truncatus");
$aquilaChrysaetos = new Eagle("Беркут","Птицы","Aquila chrysaetos");
$live = [$BrachypelmaSmithi, $human, $bosTaurus, $tursiopsTruncatus, $aquilaChrysaetos];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Live in Earth</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Название</th>
			<th>Класс</th>
			<th>Научное название</th>
			<th>Разумность</th>
		</tr>
		<tr>
			<?php 
			foreach ($live as $value) {
				$count += 1;
			?>
			<td><?php echo $count . ") " . $value -> getName()?></td>
			<td><?php echo $value -> clasification?></td>
			<td><?php echo $value -> nameScientific?></td>
			<td><?php echo $value -> isItReasonable()?></td>
			
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>