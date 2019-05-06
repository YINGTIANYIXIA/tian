<?php

/**
* 
*/
class FEN
{
	// $array=[1,2,3,4,5,6];

	public static function cha($array){
		$a = count($array);
		$b = substr_count($a, 1);
		if ($b<$a) {
			echo $b;
		}else{
			echo $a;
		}

	}
	var_dump($a);

	public static function cha2($array){
		$arr = '';
		$arr = substr_count($array,1);
		if ($arr<count($array)) {
			$arr = 1;
			echo $arr;
		}
		var_dump($arr);
}

$array=[1,2,3,4,5,6];
$as= FEN::cha($array);






?>