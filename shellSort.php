<?php 

// require './function.php';
/**
 * [shellSort 希尔排序]
 * @param  [array] $arr [description]
 * @return [array]      [description]
 */
function shellSort($arr){
	$step = null;
	$i = null;
	$j = null;
	$length = count($arr);
	for($step = floor($length/2); $step > 0; $step = floor($step / 2)){
		for ($i=$step; $i < $length; $i++) { 
			for ($j=$i-$step; $j >= 0 && $arr[$j] > $arr[$j+$step]; $j-=$step ) { 
				swap($arr[$j], $arr[$j+$step]);
			}
		}
	}
	return $arr;
}

// $arr = generateRandomArray(100, 0, 100);
// $res1 = CET('shellSort', array($arr));
// print_r($res1);