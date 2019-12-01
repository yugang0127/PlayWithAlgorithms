<?php

// 二分查找非递归实现
function binarySearch($arr, $val)
{
	$low = 0;
	$high = count($arr) - 1;

	while ($low <= $high) {
		//$mid = intval(($low + $high) / 2);
		$mid = intval($low + ($high - $low) / 2);
		if ($arr[$mid] == $val) {
			return $mid;
		} elseif ($arr[$mid] < $val) {
			$low = $mid + 1;
		} else {
			$high = $mid - 1;
		}
	}
	return -1;
}

// 二分查找递归实现
function binarySearchByRecursive($arr, $val)
{
	return binarySearchRecursive($arr, 0, count($arr) - 1, $val);
}

function binarySearchRecursive($arr, $low, $high, $val)
{
	if ($low > $high) return -1;

	$mid = intval($low + (($high - $low) / 2));
	if ($arr[$mid] > $val) {
		return $mid;
	} elseif ($arr[$mid] < $val) {
		return binarySearchRecursive($arr, $mid + 1, $high, $val);
	} else {
		return binarySearchRecursive($arr, $low, $mid - 1, $val);
	}
}


$arr = [1, 5, 9, 11, 23, 87, 88, 830, 2019, 2020];
$pos = binarySearch($arr, 11);
$pos2 = binarySearchByRecursive($arr, 11);
var_dump($pos);
var_dump($pos2);