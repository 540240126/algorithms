<?php 

/**
 * [bubbleSort 冒泡排序]
 * @param  [array] $arr [为排序的数组]
 * @return [array]      [排序后的数组]
 */
function bubbleSort($arr){
	$length = count($arr);

	for ($i=1; $i < $length; $i++) { 
		for ($j=0; $j < $length - $i; $j++) { 
			if($arr[$j] > $arr[$j+1])
				swap($arr[$j], $arr[$j+1]);
		}
	}
	return $arr;
}


