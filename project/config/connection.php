<?php

class Connection{

	private $localhost = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "loginsystem";

	private $conn;

	function __construct(){

		$this->conn = new mysqli(
								$this->localhost,
								$this->username,
								$this->password,
								$this->dbname
							);
	}
	

	function registerInsert($registersql){
		$data = $this->conn->query($registersql);
		echo "Register successfully";
		// echo "<script> alert('Register Successfully'); </script>";
		header('location: ../index.php');
		
	}	

	function loginSelect($loginsql){
		$data = $this->conn->query($loginsql);
		if ($data->num_rows > 0) {
		    while($row = $data->fetch_assoc()) {
		    	echo "login successfully";
		    	// echo "<script> alert('Login Successfully'); </script>";
		    	header('location: ../dashboard.php');
		    }
		} else {
		   echo "login failed";
		   // echo "<script> alert('Login failed'); </script>";
		   header('location: ../index.php');
		}
	}

}

$connection= new Connection;

?>



