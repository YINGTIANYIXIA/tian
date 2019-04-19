<?php

function index($n,$m){
	if ($n<1||$m<1) {
		return 1;
	}

	if ($n<0) {
		return 0;
	}

	return (range($n-1,$m)%$n);
}
echo index(11,3);




?>