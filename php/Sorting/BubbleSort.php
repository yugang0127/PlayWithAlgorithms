<?php

// 冒泡排序，$arr表示数组
function bubbleSort($arr)
{
	$len = count($arr);
	if ($len <= 1) return $arr;

	for ($i = 0; $i < $len; $i++) {
		// 提前退出冒泡循环的标志位
		$flag = false;
		for ($j = 0; $j < $len - $i - 1; $j++) {
			if ($arr[$j] > $arr[$j+1]) { // 交换
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $tmp;
				$flag = true; // 表示有数据交换
			}
		}
		if (!$flag) break; // 没有数据交换，提前退出
	}
	return $arr;
}

// 冒泡排序，$arr表示数组
function bubbleSortWithBorder($arr)
{
	$len = count($arr);
	if ($len <= 1) return $arr;

	$lastExchangeIndex = 0;
	$sortBorder = $len - 1;

	for ($i = 0; $i < $len; $i++) {
		// 提前退出冒泡循环的标志位
		$flag = false;
		for ($j = 0; $j < $sortBorder; $j++) {
			if ($arr[$j] > $arr[$j+1]) { // 交换
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $tmp;
				$flag = true; // 表示有数据交换
				$lastExchangeIndex = $j;
			}
		}
		$sortBorder = $lastExchangeIndex;
		if (!$flag) break; // 没有数据交换，提前退出
	}
	return $arr;
}

$arr = [79, 1, 5, 22, 38, 40, 66];
$sortedResult = bubbleSort($arr);
$sortedResult = bubbleSortWithBorder($arr);
var_dump($sortedResult);