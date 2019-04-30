<?php


/**
* 
*/
class JIN
{
	
	public static function Num($n){
		$b = decbin($n);
		$m = substr_count($b, '1');
		return $m;
	}
}


$p = JIN::Num(100);
echo "$p";


?>