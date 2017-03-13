<?php 

// require_once './function.php';

/**
 * [selectionSort 选择排序]
 * @param  [type] $arr [description]
 * @return [type]      [description]
 */
function selectionSort($arr){
	$length = count($arr);
	for ($i=0; $i < $length; $i++) { 
		$minIndex = $i;
		for ($j=$i+1; $j < $length; $j++) { 
			if($arr[$j] < $arr[$minIndex]){
				$minIndex = $j;
			}
		}
		swap($arr[$i], $arr[$minIndex]);
	}
	return $arr;
}

// CET('selectionSort', array(generateRandomArray(1000, 0, 1000)));
// CET('selectionSort', array(generateRandomArray(2000, 0, 2000)));
// CET('selectionSort', array(generateRandomArray(4000, 0, 4000)));
// CET('selectionSort', array(generateRandomArray(8000, 0, 8000)));