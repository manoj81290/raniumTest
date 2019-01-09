<?php 


class Car 
{
	
	function startCar()
	{
		echo "The car is started and from parent class <br>";

	}

	function InvokeParentStart(){
		self::startCar();
	}

}


class sportsCar extends Car
{
	function startCar()
	{
		echo "The sport car is started with self and from childclass<br>";

	}

	function invokeParent(){
		parent::InvokeParentStart();
	}
	
}

$spcar = new sportsCar();
$spcar->startCar();

$spcar->invokeParent();



/*Method Overloading*/

/**
 * 
 */
/*class Additionclass
{
	
	function add($num1, $num2)
	{
		echo $num1+$num2;

	}

	function add($num1, $num2, $num3)
	{
		echo $num1+$num2+$num3;
		
	}
}

$obj = new Additionclass();
$obj->add(1,1,3);*/
?>