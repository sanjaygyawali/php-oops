<?php
	
include 'sqlquery.php';

class Loginformdata{

	private $username;
	private $password;
	private $insert;

	function getLoginPostData(){
		$this->username = $_POST['username']; 
		$this->password = $_POST['password'];
		$this->insert->loginData($this->username , $this->password);
	}

	function __construct(){
		$this->insert = new Sqlquery;
	}

}


$obj = new Loginformdata;
$obj-> getLoginPostData();

?>