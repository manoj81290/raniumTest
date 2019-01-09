<?php 
	
	/**
	 * 
	 */
	class Food
	{

		protected $fname;

		function getname($name){
			$this->fname = $name;
		}
		
		public function showdata()
		{
			echo "Item is in : ".$this->fname."<br>";
		}
	}

	/**
	 * 
	 */
	class JunkFood extends Food
	{
		
		function passvalue(){
			$this->fname = "New Junk Food";
		}
	}

	$obj1 = new JunkFood();
	//$obj1->passvalue("Pizza..");
	$obj1->passvalue();
	$obj1->showdata();

?>