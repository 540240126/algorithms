<?php 

require './function.php';
// require './selectionSort.php';
// spl_autoload_register(function ($class) {
//     require './' . $class . '.php';
// });

$arr = generateRandomArray(10000, 0, 10000);
// $arr = generateNearlyOrderedArray(100000, 10);
// $res1 = CET('selectionSort', array($arr));

// $res = CET('insertionSort', array($arr));

// $res2 = CET('shellSort', array($arr));

// $res3 = CET('mergeSort', array($arr));

$res4 = CET('mergeSortBU', array($arr));

// $res5 = CET('bubbleSort', array($arr));

// $res6 = CET('bubbleSort1', array($arr));

// $res7 = CET('shellSort1', array($arr));

// $res8 = CET('quickSort', array($arr));
 
// $res9 = CET('quickSort2', array($arr));

$res10 = CET('quickSort3Ways', array($arr));
// print_r($res10);
// print_r($res9);
// print_r($res8);
// print_r($res7);
// print_r($res);
// print_r($res4);
// print_r($res);
// print_r($res3);
// print_r($res2);
// echo -23 % 22;
// echo 1 | 11;
