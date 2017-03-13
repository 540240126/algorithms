<?php 

namespace {
	/**
	 * 快速排序
	 * @param  [array]
	 * @return [array]
	 */
	function quickSort($arr){
		$length = count($arr);
		__quickSort($arr, 0, $length-1);

		return $arr;
	}

	/**
	 * 对 $arr[$l...$r] 部分进行快速排序
	 * @param  [type]
	 * @param  [type]
	 * @param  [type]
	 * @return [null]
	 */
	function __quickSort(&$arr, $l, $r){
		if(($r - $l) <= 15) 
			return quickSort\__insertionSort($arr, $l, $r);

		$p = partition($arr, $l, $r);
		__quickSort($arr, $l, $p-1);
		__quickSort($arr, $p+1, $r);
	}
	//partition 分割, 对 $arr[$l...$r] 部分进行partition操作
	//返回P, 使得 $arr[$l...$p-1] < $arr[$p] ; $arr[$p+1...$r] > $arr[$p] 
	/**
	 * @param  [array]
	 * @param  [int]
	 * @param  [int]
	 * @return [int]
	 */
	function partition(&$arr, $l, $r){
		swap($arr[$l], $arr[rand()%($r-$l+1)+$l]);

		$v = $arr[$l];

		$j = $l;
		for ($i=$l+1; $i <= $r; $i++) { 
			if($arr[$i] < $v){
				swap($arr[$i], $arr[++$j]);
			}
		}

		swap($arr[$j], $arr[$l]);
		return $j;
	}
}

namespace quickSort {
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
}