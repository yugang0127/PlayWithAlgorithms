<?php
// 选择排序，$arr表示数组
function selectionSort($arr)
{
	$len = count($arr);
	if ($len <= 1) return $arr;

	for ($i = 0; $i < $len; $i++) {
		$min = $i;
		// 从未排序区间中寻找最小元素
		for ($j = $i; $j < $len; $j++) {
			if ($arr[$j] < $arr[$min]) {
				$min = $j;
			} 
		}
		// 将未排序区间最小元素放到已排序区间末尾
		$tmp = $arr[$i];
		$arr[$i] = $arr[$min];
		$arr[$min] = $tmp;
	}
	return $arr;
}

$arr = [79, 1, 5, 22, 38, 40, 66];
$sortedResult = selectionSort($arr);
var_dump($sortedResult);