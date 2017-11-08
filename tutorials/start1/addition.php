<?php

	class adds{
		public $a = 5;
		public $b = 6;

		function addition(){

			$x = $this->a;
			$y = $this->b;

			$c = 0;
			
			$c = $x + $y;

			echo $c;
		}

	}

	$obj = new adds;
	$obj->addition(); 

?>