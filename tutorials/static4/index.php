<?php


class abc{
	public static $data = "Data";

	public static $num;

	public static function getNum(){
		return self::$num ;
	}

	public static function setNum($s){
		self::$num = $s;
	}
}

 echo abc::$data;

 echo abc::setNum(55);
 echo abc::getNum();

?>