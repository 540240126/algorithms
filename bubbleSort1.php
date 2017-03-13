<?php 

/**
 * [bubbleSort1 冒泡排序第二种方法]
 * @param  [type] $arr [description]
 * @return [type]      [description]
 */
function bubbleSort1($arr){
	$swapped = false;
	$length = count($arr);
	do {
		$swapped = false;
		for ($i=1; $i < $length; $i++) { 
			if($arr[$i-1] > $arr[$i]){
				swap($arr[$i-1], $arr[$i]);
				$swapped = true;
			}
		}

		$length --;
	} while ($swapped);

	return $arr;
}

