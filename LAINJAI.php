<?php

/**
* 
*/
class Sumn
{
	
	public static function Sum($n)
	{
		$sum=0;
		for ($i=0; $i <= $n; $i++) { 
			$sum+=$i;
		}
		return $sum;
		
	}
}

echo Sumn::Sum(5);

?>