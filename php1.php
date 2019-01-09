<?php 
	// Learn Php __constructor magic function

	/**
	* 
	*/
	class TV
	{
		public $model;
		public $volume;

		function volumeUp(){
			$this->volume++;
		}
		function volumeDown(){
			$this->volume--;
		}

		// Magic function from php5
		function __construct($m, $v)
		{
			$this->model = $m;
			$this->volume = $v;
		}
	}
	//Inheritance Example
	class TvwithTimer extends TV
	{
		public $timer = true;
		// function __construct(argument)
	 // 	{
	 // 		# code...
	 // 	}
	} 


	$tv = new  TvwithTimer('fff', 2);

	echo "Model Name: ".$tv->model;
	echo "Volume is: ".$tv->volume;
 ?>