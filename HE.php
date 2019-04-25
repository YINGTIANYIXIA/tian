<?php
/**
* 
*/
class JIA
{
	
	 public static function Add($num1,$num2)
	{
		$sum = 0;
		$sum = $num1+$num2;
	}
	echo "$sum";
}

echo JIA::Add(1,2);

?>