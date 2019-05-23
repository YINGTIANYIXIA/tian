<?php

/**
* 
*/
class Suan
{
	
	public static function Sum_Solution($n)//函数定义
	{
		$sum = ($n>1?$n+self::Sum_Solution($n-1):1);
		return $sum;
	}
}

$p =Suan::Sum_Solution(5);//函数调用
print_r($p);


?>