<?php

// 快速排序，$arr表示数组
function quickSort(&$arr)
{
	$len = count($arr);
	if ($len <= 1) return $arr;

	quickSortRecursive($arr, 0, $len - 1);
}



function quickSortRecursive(&$arr, $p, $r)
{
	// 递归终止条件
	if ($p >= $r) return;

	$q = partition($arr, $p, $r);
	quickSortRecursive($arr, $p, $q - 1);
	quickSortRecursive($arr, $q + 1, $r);
}

/**
* 分治（单边循环法）
*/
function partition(&$arr, $p, $r)
{
	$pivot = $arr[$r];
	$mark = $p;
	for ($i = $p; $i < $r; $i++) {
		if ($arr[$i] < $pivot) {
			$tmp = $arr[$mark];
			$arr[$mark++] = $arr[$i];
			$arr[$i] = $tmp;
		}
	}
	$arr[$r] = $arr[$mark];
	$arr[$mark] = $pivot;
	return $mark;
}

/**
* 分治（双边循环法）
*/
function partition2(&$arr, $p, $r)
{
	$pivot = $arr[$p];
	$left = $p;
	$right = $r;

	while ($left != $right) {
		// 控制right指针比较并左移
		while ($left < $right && $arr[$right] > $pivot) {
			$right--;
		}
		// 控制left指针比较并右移
		while ($left < $right && $arr[$left] <= $pivot) {
			$left++;
		}
		// 交换left和right所指向的元素
		if ($left < $right) {
			$tmp = $arr[$left];
			$arr[$left] = $arr[$right];
			$arr[$right] = $tmp;
		}
	}
	// pivot和指针重合点交换
	$arr[$p] = $arr[$left];
	$arr[$left] = $pivot;
	return $left;
}

$arr = [79, 1, 5, 22, 38, 40, 66];
quickSort($arr);
var_dump($arr);