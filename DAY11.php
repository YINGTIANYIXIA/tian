<?php

/**
* 
*/
class Dao
{
	
	public static function ReverseSentence($str)
	{
		$st = "";
		$array = array_count_values($str);
		foreach ($array as $k => $v) {
			$st[]  = $k; 
		}
		return $st;
	}
}
$p = Dao::ReverseSentence("student. a am I");
echo "$p";
