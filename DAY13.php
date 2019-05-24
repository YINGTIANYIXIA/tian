<?php


/**
* 
*/
class Suan//定义一个函数
{
	
	public static function Add($num1, $num2)
	{
		$sum = 0;
		$sum = $num1+$num2;
		return $sum;

	}
}

$p = Suan::Add(1,2);
print_r($p);


?>