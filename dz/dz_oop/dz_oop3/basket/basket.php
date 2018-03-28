<?php
session_start();
class Basket
{	
	public $product;
	public $price;
	public $session;
	public function Product(){
		foreach ($this -> session as $name => $arr) {
	 		foreach ($arr as $product => $price) {
	 			$this -> product = array($product);
	 			$this -> price = array($price);
	 		}	
			// $this -> product = $product;
			// $this -> price = $price;
	 	}
    }
}

$session = new Basket;
$session -> session = $_SESSION;
$session -> Product();
$session -> price = 1;
// var_dump($_SESSION);
var_dump($session);


