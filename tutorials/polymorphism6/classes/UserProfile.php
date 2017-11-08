<?php
class UserProfile{

	private $logger;

	public function __construct(LoggerInterface $logger){
		$this->logger = new $logger;
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

?>