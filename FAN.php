<?php

/**
* 
*/
class FAN
{
	
	public static function Combine($arr_A, $arr_B){
		$arr_A=[1,3,6,9];
		$arr_B=[2,4,5,8,20];
		
		$sum = count($arr_A,$arr_B);
		
		$a = implode($arr_A);
		$b = implode($arr_B);
		$sum = "$a'.'$b";

	}
		echo "Combine($arr_A,$arr_B)"; 

}


?>