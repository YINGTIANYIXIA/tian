<?php

/**
* 
*/
class Suan//定义函数
{
	$a = [1,2,3,4,5];
	public static function Erfen1($n)
	{
		$n = array_count_values($a);
		$m = '';
		foreach ($n as $k => $v) {
			if ($n/2) {
			 	$m[]=$n;
			 } 
		}
		return $m;
	}


	public static function Erfen2($n)
	{
		$m = '';
		if ($n>$m) {
			$a  = $m;
			return $m;
		}
	}

}

$p = Suan::Erfen1($a);
var_dump($p);







?>