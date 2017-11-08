<?php
	
	class subs{

		function subtraction($x , $y){
			$sub= 0 ;
			$sub = $x - $y;

			return $sub;
		}
	}

	$obj = new subs;
	$subtraction = $obj -> subtraction(8,3);
	echo $subtraction;

?>