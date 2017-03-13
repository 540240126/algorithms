<?php 

function shellSort1($arr){
	$length = count($arr);
	$h = 1;
	while ($h < ($length / 3)) 
		$h = 3*$h + 1;
	// 计算 increment sequence: 1, 4, 13, 40, 121, 364, 1093...

	while ($h >= 1) {
		for ($i=$h; $i < $length; $i++) { 
			// 对 arr[i], arr[i-h], arr[i-2*h], arr[i-3*h]... 使用插入排序
			$e = $arr[$i];
			for ($j=$i; $j >= $h && $e < $arr[$j-$h]; $j-=$h) 
				$arr[$j] = $arr[$j-$h];
			$arr[$j] = $e;
		}
		$h = floor($h / 3);
	}
	return $arr;
}


