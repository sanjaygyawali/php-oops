<?php

	include 'connection.php';


class Sqlquery{
	private $obj;

	function __construct(){
		$this->obj = new Connection;
	}

	function registerData($u , $p){
		$registersql = "INSERT INTO registerdata (username, password) VALUES ('$u', '$p')";
		$this->obj->registerInsert($registersql);
	}	

	function loginData($u , $p){
		$loginsql = "SELECT username, password FROM registerdata WHERE username='$u' && password='$p' ";
		$this->obj->loginSelect($loginsql);
	}

}



?>

