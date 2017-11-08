<?php

	function __autoload($class){
		include_once "classes/$class.php";
	}

	$logger = new  DBLogger();
	$logger = new  FileLogger();
	$logger = new  EmailLogger();

	$profile = new UserProfile($logger);
	$profile->createUser();

?>