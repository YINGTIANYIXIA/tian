<?php

 function choushu($num){

	if (!$num) {
		echo "请输入一个数";
	}
	while ($num%2==0) {
		$num/2==1;
		echo "2";
	}
	while ($num%3==0) {
		$num/3==1;
		echo "3";
	}
	while ($num%5==0) {
		$num/5==1;
		echo "5";
	}

	if ($num==1) {
		echo "这个数是丑数";
	}

}

$num=choushu(13);





?>