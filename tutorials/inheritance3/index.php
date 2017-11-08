<?php

	class Mobile{

		public $mobile ;

		function __construct(){
			$this->mobile = "Samsung";
		}
	}

	class Volume extends Mobile {
		public  $volume ="1";
	}


	

	$obj = new Volume();
	echo $obj->volume;
	echo $obj->mobile;


?>