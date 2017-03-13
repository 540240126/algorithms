<?php 
namespace {
	/**
	 * [quickSort2 快速排序 双路快排]
	 * @param  [array] $arr [description]
	 * @return [array]      [description]
	 */
	function quickSort2($arr){
		$length = count($arr);

		__quickSort2($arr, 0, $length-1);
		return $arr;
	}

	/**
	 * [__quickSort2]
	 * @param  [array] &$arr [description]
	 * @return [null]       [description]
	 */
	function __quickSort2(&$arr, $l, $r){
		if(($r - $l) <= 15) 
			return quickSort2\__insertionSort($arr, $l, $r);

		$p = partition2($arr, $l, $r);
		__quickSort2($arr, $l, $p-1);
		__quickSort2($arr, $p+1, $r);
	}

	/**
	 * [__partition2 description]
	 * @param  [array] &$arr [description]
	 * @param  [int] $l    [description]
	 * @param  [int] $r    [description]
	 * @return [int]       [description]
	 */
	function partition2(&$arr, $l, $r){
		swap($arr[$l], $arr[rand()%($r-$l+1)+$l]);

		$v = $arr[$l];

		// $arr[$l+1...$i) <= $v 和 $arr($j...$r] >= $v
		$i = $l + 1;
		$j = $r;
		while (true) {
			while ($i <= $r && $arr[$i] < $v) $i++;
			while ($j >= $l + 1 && $arr[$j] > $v) $j--;
			if($i > $j) break;
			swap($arr[$i], $arr[$j]);
			$i++;
			$j--;
		}

		swap($arr[$l], $arr[$j]);
		return $j;
	}
}

namespace quickSort2 {
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