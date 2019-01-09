<?php 
	/**
	 * 
	 */
	abstract class speak
	{
		
		abstract public function sayHello();
		
		public function hello2()
		{
			echo "Hello";
		}
	}

	/**
	 * 
	 */
	class childone extends speak
	{
		
		function sayhello(){
			echo "Sayhello function from child class";
		}
	}

	$obj = new childone();
	$obj->sayHello();
	$obj->hello2();

 ?>