<?php 

/**
 * 
 */
class Student
{
	private $name, $address, $contact;

	public function getData($sname, $saddress, $scontact)
	{
		$this->name = $sname;
		$this->address = $saddress;
		$this->contact = $scontact;
	}	

	function showData(){
		echo "Name : ".$this->name;
		echo "Address : ".$this->address;
		echo "Contact no: ".$this->contact;
	} 

}

$s1 = new Student();
$s2 = new Student();

$s1->getData("Manoj","Saoner",1234);
$s1->showData();

$s2->getData("Prashant", "Nanded", 234);
$s2->showData();


	
?>