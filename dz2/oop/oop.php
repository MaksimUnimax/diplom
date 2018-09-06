<?php 

abstract class LiveInEarth
{
	protected $name;
	public $clasification;
	public $nameScientific;
	protected $ageEarth;

	public function __construct($name,$clasification,$nameScientific)
	{
		$this -> name = $name;
		$this -> clasification = $clasification;
		$this -> nameScientific = $nameScientific;
	}

	public function isItReasonable()
	{
			if($this -> nameScientific = "HomoSapiens") {
			echo "Разумный";
		}else {
			echo "Неразумный";	
		}
	}

	abstract function getName(); 
}

class Human extends LiveInEarth 
{
	public function getName()
	{
		echo $this -> name;
	}
}

class Cow extends LiveInEarth
{
	public function getName()
	{
		echo $this -> name;
	}	
}

class Spider extends LiveInEarth
{
	public function getName()
	{
		echo $this -> name;
	}
}

class Dolphin extends LiveInEarth
{
	public function getName()
	{
		echo $this -> name;
	}
}

class Eagle extends LiveInEarth
{
	public function getName()
	{
		echo $this -> name;
	}	
}
$BrachypelmaSmithi = new Spider("Паук-птицеед","Членистоногий","Theraphosidae");
$human = new Human("Человек","Млекопитающее","HomoSapiens");
$
?>