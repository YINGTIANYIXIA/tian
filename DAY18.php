<?php

/**
* 
*/
class Suan//定义一个函数
{
	
	public static function NumberOf1($n)//一个方法
	{
		$m = decbin($n);//十进制转化为二进制
		// for ($i=1; $i < $m; $i++) { 
		// 	echo 1;
		// }
		// $a = count($m);
		return $a;
	}
	

}

$p = Suan::NumberOf1(10);//引用函数方法
var_dump($p);



?>