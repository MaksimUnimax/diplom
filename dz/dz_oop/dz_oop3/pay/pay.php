<?php
include('../basket/basket.php');
class Pay extends Basket
{	
	public $product;
    public $price;
	public function Print(){
		// $this -> price = $price;
		// echo array_sum($price);
	}
}

$end = new Pay;
$end -> Print();
var_dump($end -> price);