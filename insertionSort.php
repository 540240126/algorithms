<?php 

// require_once './function.php';

function insertionSort($arr){
	$length = count($arr);
	for ($i=1; $i < $length; $i++) { 
		$e = $arr[$i];
		for ($j=$i; $j > 0 && $e < $arr[$j-1]; $j--) { 
			$arr[$j] = $arr[$j-1];
		}
		$arr[$j] = $e;
	}
	return $arr;
}

// $res = CET('insertionSort', array(generateRandomArray(1000, 0, 1000)));
// print_r($res);
