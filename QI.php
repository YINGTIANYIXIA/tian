<?php

/**
* 
*/
class Math
{
	
	public static function calFn($n,$m)
	{
		if ($m%2==0) {
			return 0;
		}else($m%2==1) {
			return 1;
		}
		$arr = implode(count($m,$n));
		$str = str_split($arr);
		$p=array_count_values($str);
	}
}
 Math::calFn($m,$n);
echo $p=(1,13);

?>