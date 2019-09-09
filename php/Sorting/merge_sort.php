<?php

// 归并排序，$arr表示数组
function mergeSort(&$arr)
{
	$len = count($arr);
	if ($len <= 1) return $arr;

	mergeSortRecursive($arr, 0, $len - 1);
}


// 递归调用函数
function mergeSortRecursive(&$arr, $p, $r)
{
	// 递归终止条件
	if ($p >= $r) return;

	// 取p到r之间中间位置q
	$q = (int)(($p + $r) / 2);
	// 分治递归
	mergeSortRecursive($arr, $p, $q);
	mergeSortRecursive($arr, $q + 1, $r);
	merge($arr, $p, $q, $r);
}

function merge(&$arr, $p, $q, $r)
{
	// 初始化变量$i, $j, $k
	$i = $p;
	$j = $q + 1;
	$k = 0;
	$tmp = [];

	while ($i <= $q && $j <= $r) {
		if ($arr[$i] <= $arr[$j]) {
			$tmp[$k++] = $arr[$i++];
		} else {
			$tmp[$k++] = $arr[$j++];
		}
	}

	// 判断哪个子数组中有剩余的数据
	$start = $i;
	$end = $q;
	if ($j <= $r) {
		$start = $j;
		$end = $r;
	}

	// 将剩余数组拷贝到临时数组$tmp
	while ($start <= $end) {
		$tmp[$k++] = $arr[$start++];
	}

	// 将$tmp数组的数组拷贝回$arr[p...r]
	for ($i = 0; $i <= $r - $p; $i++) {
		$arr[$p + $i] = $tmp[$i];
	}
	return $arr;
}

$arr = [79, 1, 5, 22, 38, 40, 66];
mergeSort($arr);
var_dump($arr);