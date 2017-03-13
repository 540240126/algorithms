<?php 

/**
 * 自顶向下归并排序
 */

function mergeSort($arr){
	__mergeSort($arr, 0, count($arr)-1);
	return $arr;
}

/**
 * 递归使用归并排序, 对 $arr[$l.....$r] 范围内进行排序
 */
function __mergeSort(&$arr, $l, $r){

	if(($r - $l) <= 15) 
		return __insertionSort($arr, $l, $r);

	$mid = floor(($r + $l) / 2);
	__mergeSort($arr, $l, $mid);
	__mergeSort($arr, $mid+1, $r);
	if($arr[$mid+1] < $arr[$mid])
		__merge($arr, $l, $mid, $r);
}

/**
 * 将 $arr[$l...$mid] 和 $arr[$mid+1...$r] 两部分进行归并
 */
function __merge(&$arr, $l, $mid, $r){

	$aux = array();// auxiliary 临时空间,辅助物, 数组长度为 $arr[$r-$l+1]

	for ($i=$l; $i <= $r; $i++)
		$aux[$i-$l] = $arr[$i];

	$i = $l;
	$j = $mid + 1;
	for ($k=$l; $k <= $r; $k++) { 
		if($i > $mid){
			$arr[$k] = $aux[$j-$l];
			$j++;
		}elseif($j > $r){
			$arr[$k] = $aux[$i-$l];
			$i++;
		}elseif($aux[$i-$l] < $aux[$j-$l]){
			$arr[$k] = $aux[$i-$l];
			$i++;
		}else{
			$arr[$k] = $aux[$j-$l];
			$j++;
		}
	}
}

/**
 * 将 $arr[$l...$r] 范围内进行排序
 */
function __insertionSort(&$arr, $l, $r){
	for ($i=$l+1; $i <= $r; $i++) {
		$e = $arr[$i];
		for ($j=$i; $j > $l && $e < $arr[$j-1] ; $j--) { 
			$arr[$j] = $arr[$j-1];
		}
		$arr[$j] = $e;
	}
	// return null;
}
