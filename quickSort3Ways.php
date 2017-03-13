<?php 

namespace {
	
	// 三路快速排序处理 $arr[$l...$r], 将$arr[$l...$r] 分成 >$v; ==$v; <$v 三部分
	// 之后递归对 >$v; <$v 两部分继续进行三路快速排序
	function quickSort3Ways($arr){
		$length = count($arr);
		__quickSort3Ways($arr, 0, $length-1);
		return $arr;
	}

	function __quickSort3Ways(&$arr, $l, $r){
		if($r - $l <= 15)
			return quickSort3Ways\__insertionSort($arr, $l, $r);

		// partition
		swap($arr[$l], $arr[rand()%($r-$l+1)+$l]);
		$v = $arr[$l];

		$lt = $l;
		$gt = $r + 1;
		$i = $l + 1;
		while ($i < $gt) {
			if($arr[$i] < $v){
				swap($arr[$i], $arr[$lt+1]);
				$lt++;
				$i++;
			}elseif($arr[$i] > $v){
				swap($arr[$i], $arr[$gt-1]);
				$gt--;
			}else{
				$i++;
			}
		}

		swap($arr[$l], $arr[$lt]);

		__quickSort3Ways($arr, $l, $lt-1);
		__quickSort3Ways($arr, $gt, $r);
	}
}

namespace quickSort3Ways {
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