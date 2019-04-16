<?php
/**
* 
*/
// class Math
// {
// 	public static function  erArray($a){
// 		$ji=[];
// 		$ou=[];
// 		foreach ($array as $key => $value) {
// 			if ($a%2==1) {
// 				;
// 			}
// 		}
// 	} 
$a=[1,2,3,4,5,6];//定义一个数组
$b=[];
$c=[];
$d=[];

for ($i=0; $i <count($a[$i]) ; $i++) { 
	if ($a[$i]%2==1) {
		$b=$a[$i];
	}else {
		$c=$a[$i];
	}
	$d=array_merge($b,$c);
}

var_dump($d);
	
// }






?>