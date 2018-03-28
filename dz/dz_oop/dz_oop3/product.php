<?php
abstract class Product 
{
	public $name;
	protected $price;
	abstract public function GetPrice();
};