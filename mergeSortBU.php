<?php 

namespace {
	/**
	 * 自底向上归并排序
	 */
	function mergeSortBU($arr){
		$length = count($arr);
		for ($i = 0; $i < $length; $i += 16) 
			mergeSortBU\__insertionSort($arr, $i, min($i+15, $length-1));

		for ($sz=16; $sz <= $length; $sz+=$sz) { 
			for ($j=0; $j+$sz < $length; $j+=$sz+$sz) { 
				//对 $arr[$j...$j+$sz-1] 和 $arr[$j+$sz...$j+2*$sz-1] 进行归并
				if($arr[$j+$sz-1] > $arr[$j+$sz])
					mergeSortBU\__merge($arr, $j, $j+$sz-1, min($j+$sz+$sz-1, $length-1));
			}
		}
		return $arr;
	}
}

namespace mergeSortBU {
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
}