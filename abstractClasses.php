<?php 
/**
 * 
 */
class FullTimeEmployee
{
	protected $firstname;
	protected $lastname;
	protected $annualSalary;


	public function getFullName()
	{
		return $this->firstname. " " .$this->lastname;
	}

	public function getMonthlySalary()
	{
		return $this->annualSalary/12;
	}
}

/**
 * 
 */
class ContractEmployee
{
	protected $firstname;
	protected $lastname;
	protected $hourlyRate
	protected $totalHours;

	public function getFullName()
	{
		return $this->firstname." ".$this->lastname;

	}

	public function getMonthlySalary()
	{
		return $this->hourlyRate*$totalHours;
	}
}

$obj = new FullTimeEmployee();
echo $obj->




?>