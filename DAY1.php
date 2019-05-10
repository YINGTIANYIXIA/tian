<?php

$str = "aasasaaa";
$st = str_split($str,1);
$arr = array_count_values($st);
print_r($arr);
foreach ($arr as $k => $v) {
	if ($v>=3) {
		echo $k;
	}
}




?>