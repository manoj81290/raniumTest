<?php 

/**
 * 
 */
class Example
{
	private $name;
	
	public function __construct($val)
	{
		$this->name=$val;
	}	

	function showdata() {
		echo $this->name;
	}

}


$obj = new Example("Im from PHP");
$obj->showdata();

?>