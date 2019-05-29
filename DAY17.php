<?php

$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];

function Combine($arr_A,$arr_B)
{
	$arr = '';
	foreach ($arr_B as $k => $v) {
		$arr_A = $arr[];
		$arr[]=$arr_B;
		
	}
	$count = count($arr);
	$temp =0;
	for ($i=0; $i < $count; $i++) { 
		for ($j=0; $j < $count-1-$i; $j++) { 
			if ($count) {
				$temp = $arr[$i];
				$arr[$i] = $arr[$j-1];
				$arr[$j-1] = $temp;
			}
		}
	}
	var_dump($temp);
}




?>