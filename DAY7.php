<?php

/**
* 
*/
class Chou
{
	
	public static function GetUglyNumber_Solution($index)
	{
		while ($index) {
			if ($index%2==0) {
				return 2;
			}
		}

		while ($index%3==0) {
			return 3;
		}

		while ($index%5==0) {
			return 5;
		}

		if ($index) {
			echo "这个数是丑数";
		}else {
			echo "这个不数是丑数";
			
		}
	}
}

$p = Chou::GetUglyNumber_Solution(6);
echo "$p";




?>