<?php
/**
 * 交换数据两个元素的位置
 */
function swap(&$a, &$b){
	$c = $a;
	$a = $b;
	$b = $c;
}

/**
 * 生成有 $count 个元素的随机数组, 每个元素的随机范围为 [$min, $max]
 */
function generateRandomArray($count, $min, $max){
	$count += 0;
	$min += 0;
	$max += 0;
	$arr = array();
	if(!($max > $min)){
		return $arr;
	}
	
	for ($i=0; $i < $count; $i++) { 
		$arr[] = rand() % ($max - $min + 1) + $min;	
	}

	return $arr;
}

/**
 * 生成 有$n 个元素的元素相近的随机数组
 */
function generateNearlyOrderedArray($n, $swapTimes){
	if($n < 0) return;
	$arr = range(0, $n-1);
	for ($i=0; $i < $swapTimes; $i++) { 
		$posx = rand() % $n;
		$posy = rand() % $n;
		swap($arr[$posx], $arr[$posy]);
	}
	return $arr;
}

/**
 * Compute Execute Time 计算程序执行时间
 */
function CET($callback, $arg=array()){
	include_once $callback.'.php';
	$s1 = microtime(true);
	$res = call_user_func_array($callback, $arg);
	$s2 = microtime(true);
	$diff = $s2 - $s1;
	echo "---------- $callback 执行时间为: $diff 秒 ----------\n\n";
	return $res;
}