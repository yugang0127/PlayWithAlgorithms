<?php

// 插入排序，$arr表示数组
function insertionSort($arr)
{
	$len = count($arr);
	if ($len <= 1) return $arr;

	for ($i = 1; $i < $len; $i++) {
		$value = $arr[$i];
		$j = $i - 1;
		// 查找插入的位置
		for (; $j >= 0; $j--) {
			if ($arr[$j] > $value) {
				$arr[$j+1] = $arr[$j]; // 数据移动
			} else {
				break;
			}
		}
		$arr[$j+1] = $value; // 插入数据
	}
	return $arr;
}

$arr = [79, 1, 5, 22, 38, 40, 66];
$sortedResult = insertionSort($arr);
var_dump($sortedResult);