<?php

class Logger{
	public function log($message){
		echo "Logging message: $message";
	}
}



class UserProfile{

	public function createUser(){
		$logger = new Logger();
		$logger->log("User Created");
	}

	public function updateUser(){
		$logger = new  Logger();
		$logger->log("User Updated");
	}

	public function deleteUser(){
		$logger = new  Logger();
		$logger->log("User Deleted");
	}

}

$profile = new UserProfile();
$profile->createUser();
?>