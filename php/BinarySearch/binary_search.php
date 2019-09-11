<?php


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
}


$arr = [1, 5, 9, 11, 23, 87, 88, 830, 2019, 2020];
$pos = binarySearch($arr, 11);
var_dump($pos);