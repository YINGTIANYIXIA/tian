<?php

/**
* 
*/
class ZHENG
{
	
	public static function Find($target, $array){
		$target = 7 
     	$array=[
     		[1,2,8,9],
     		[2,4,9,12],
     		[4,7,10,13],
     		[6,8,11,15]
     	];
     	$len = count($target);
     	foreach ($array as $k => $v) {
     		if ($array[0]>$len[0]) {
     			return false;
     		}

     		if ($array[0]<$len[0]) {
     			return true;
     		}


     	}
	}	

	
}







?>