<?php
/**
* 
*/
class Day
{
	
	public static function calFn($n,$m)//定义一个方法
	{
		if ($n == 0) {//当最小值为0的时候返回0
			return 0;
		}

		if ($n == 1) {//当最小值为1的时候返回1
			return 1;
		}

		$str = implode(range($m,$n));

		$arr = str_split($str);

		return array_count_values($arr)[0];

	}
}

$p = Day::calFn(1,13);
echo "$p";




?>