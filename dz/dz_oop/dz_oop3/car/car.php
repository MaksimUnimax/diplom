<?php
session_start();
include('../product.php');
class Car extends Product
{	
	public $color;
	public $transmission;
	public function GetPrice(){
		if(!isset($this -> name)){echo 'Авто не выбран'. exit();}
		if($this -> name == 'BMW' ) {$this -> price = 1000;}
		if($this -> name == 'LADA' ) {$this -> price = 500;}
		if($this -> color !== 'white' ) {$this -> price = ($this -> price) + 100;}
		if($this -> transmission !== 'noauto' ) {$this -> price = ($this -> price) + 300;}
		$_SESSION['car'] = array($this -> name => $this -> price);
	}
}
$car = new Car;
$car -> name = $_GET['name'];
$car -> color = $_GET['color'];
$car -> transmission = $_GET['transmission'];
$car -> GetPrice();


//var_dump($_GET);
var_dump($_SESSION);

//&& $this -> color == 'white' && $this -> transmission == 'noauto'