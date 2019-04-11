<?php

//水仙花数
	// for($q=1;$q<=9;$q++){

 //     for($w=0;$w<=9;$w++){

 //      for($e=0;$e<=9;$e++){

 //        if($q*$q*$q + $w*$w*$w + $e*$e*$e == 100*$q + 10*$w + $e){

 //           echo "$q $w $e "."<p>";

 //        }
 //      }
 //     }
	// }

//1到100连加
	// $sum =0;
	// for ($i=1; $i <= 100 ; $i++) { 
	// 	$sum +=$i;
	// }
	// echo $sum;


	// $i=1;
	// $sum=0;
	// while ($i<=100) {
	// $sum = $sum +$i;
	// $i++;
	// }
	// echo $sum;

	// function sum2($n, $i = 1, $sum = 0){
	// 	if ($i <= $n) {
	// 		$sum += $i;
	// 		$i++;
	// 		return sum2($n,$i,$sum);
	// 	}else{
	// 		return $sum;
	// 	}
	// }
	// echo sum2(100);

//回文
// function huiwen($str){
// 	$rev = '';
// 	$revarr = [];
// 	for ($i=0; $i < strlen($str); $i++) { 
// 		array_unshift($revarr, $str[$i]);
// 	}
// 	for ($i=0; $i < count($revarr); $i++) { 
// 		$rev .=$revarr[$i];
// 	}
// 	return $str == $rev;
// }
// var_dump(huiwen('asddsa'));

// function huiwen2($str){
// 	$rev = '';
// 	$len = strlen($str);
// 	for ($i=$len-1; $i >=0 ; $i--) { 
// 		$rev .=$str[$i];
// 	}
// 	return $str == $rev;
// }
// var_dump(huiwen('asddsa'));
?>