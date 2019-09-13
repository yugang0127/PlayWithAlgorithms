<?php

// 二分查找变形问题一：查找第一个等于给定值的元素
function binarySearchFirstEqual($arr, $val)
{
	$low = 0;
	$high = count($arr) - 1;

	while ($low <= $high) {
		$mid = intval($low + ($high - $low) / 2);
		if ($arr[$mid] > $val) {
			$high = $mid - 1;
		} elseif ($arr[$mid] < $val) {
			$low = $mid + 1;
		} else {
			if ($mid == 0 || $arr[$mid - 1] != $val) {
				return $mid;
			} else {
				$high = $mid - 1;
			}
		}
	}
	return -1;
}

// 二分查找变形问题二：查找最后一个等于给定值的元素
function binarySearchLastEqual($arr, $val)
{
	$low = 0;
	$high = count($arr) - 1;
	$len = count($arr);

	while ($low <= $high) {
		$mid = intval($low + ($high - $low) / 2);
		if ($arr[$mid] > $val) {
			$high = $mid - 1;
		} elseif ($arr[$mid] < $val) {
			$low = $mid + 1;
		} else {
			if ($mid == $len - 1 || $arr[$mid + 1] != $val) {
				return $mid;
			} else {
				$low = $mid + 1;
			}
		}
	}
	return -1;
}

// 二分查找变形问题三：查找第一个大于等于给定值的元素
function binarySearchFirstGreaterEqual($arr, $val)
{
	$low = 0;
	$high = count($arr) - 1;
	$len = count($arr);

	while ($low <= $high) {
		$mid = intval($low + ($high - $low) / 2);
		if ($arr[$mid] >= $val) {
			if ($mid == 0 || $arr[$mid - 1] < $val) {
				return $mid;
			} else {
				$high = $mid - 1;
			}
		} else {
			$low = $mid + 1;
		}
	}
	return -1;
}

// 二分查找变形问题四：查找最后一个小于等于给定值的元素
function binarySearchLastLessEqual($arr, $val)
{
	$low = 0;
	$high = count($arr) - 1;
	$len = count($arr);

	while ($low <= $high) {
		$mid = intval($low + ($high - $low) / 2);
		if ($arr[$mid] > $val) {
			$high = $mid - 1;
		} else {
			if ($mid == $len - 1 || $arr[$mid + 1] > $val) {
				return $mid;
			} else {
				$low = $mid + 1;
			}
		}
	}
	return -1;
}

$arr = [1, 5, 9, 11, 88, 88, 88, 830, 2019, 2020];
$pos = binarySearchFirstEqual($arr, 88);
$pos2 = binarySearchLastEqual($arr, 88);
$pos3 = binarySearchFirstGreaterEqual($arr, 88);
$pos4 = binarySearchLastLessEqual($arr, 88);
echo("第一个等于" . $pos . "\r\n");
echo("最后一个等于" . $pos2 . "\r\n");
echo("第一个大于等于" . $pos3 . "\r\n");
echo("最后一个小于等于" . $pos4 . "\r\n");
