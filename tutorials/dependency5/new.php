<?php

class Logger{
	public function log($message){
		echo "Logging message: $message";
	}
}



class UserProfile{

	private $logger;

	public function __construct(){
		$this->logger = new Logger();
	}

	public function createUser(){
		$this->logger->log("User Created");
	}

	public function updateUser(){
		$this->logger->log("User Updated");
	}

	public function deleteUser(){
		$this->logger->log("User Deleted");
	}

}

$profile = new UserProfile();
$profile->createUser();
$profile->updateUser();
$profile->deleteUser();

?>