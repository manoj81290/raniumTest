<?php 
	
	class Tv
	{
		protected $model;
		public $volume;

		public function volumeUp()
		{
			$this->volume++;

		}
		public function volumeDown()
		{
			$this->volume--;
		}

		function getModel(){
			return $this->model;
		}

		function __construct($m, $v){
			$this->model = $m;
			$this->volume = $v;
		}
	}
	

	
	$tv_obj = new Tv('Samsung', 3);
	echo $tv_obj->model;
	



?>