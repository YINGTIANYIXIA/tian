<?php

$n = 5;//设定台阶数
print_r($data);//返回跳法数
function index($n){
	if ($n == 1) {
		return 1;
	}
	$str = ['0','1','2'];
	$data='';
	if ($n<3) {
		return $data[$str];
	}
	return index($data-1)+index($data+2);
}




?>