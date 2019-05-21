<?php

$array = [2,4,3,6,3,2,5,5];//定义一个数组函数
function num($array){//定义一个方法
	$count = array_count_values($array);//统计数组元素个数
	foreach ($count as $k => $v) {
		if ($v>2) {
			return $k;
		}
		
		$num_c[] = $k;
	}
	return $num_c;
}






?>