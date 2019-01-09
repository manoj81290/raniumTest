<?php 

/**
 * 
 */
class Parents
{
	
	function parentsfun()
	{
		echo "Im a Parent CLass<br>";
	}
}

/**
 * 
 */
class Child extends Parents
{
	
	function childfun()
	{
		echo "Im in CHild Class<br>";
	}
}


$obj1 = new Child();

$obj1->childfun();
$obj1->parentsfun();

?>