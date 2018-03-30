<?php
include('../basket/basket.php');
class Pay extends Basket
{	
	public function Print(){
		echo  {$this->price};
	}
}

$end = new Pay;
$end -> Print();
var_dump($end -> price);