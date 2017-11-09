<?php
	
include 'sqlquery.php';

class Registerformdata{

	private $username;
	private $password;
	private $insert;

	function getRegisterPostData(){
		$this->username = $_POST['username']; 
		$this->password = $_POST['password'];
		$this->insert->registerData($this->username , $this->password);
	}

	function __construct(){
		$this->insert = new Sqlquery;
	}

}


$obj = new Registerformdata;
$obj-> getRegisterPostData();

?>