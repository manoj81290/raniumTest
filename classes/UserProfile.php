<?php 

/**
 * 
 */
class UserProfile
{
	private $logger;
	public function createUser()
	{
		echo "Creating User";
		$this->logger->log("User Created");
	}

	public function updateUser()
	{
		echo "Updating User";
		$this->logger->log("User Updating");
	}

	public function deleteUser()
	{
		echo "Deleting User";
		$this->logger->log("User Deleting");
	}
	public function __construct(Logger $logger){
		$this->logger = $logger;
	}

}

?>