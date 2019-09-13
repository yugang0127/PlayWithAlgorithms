<?php
function mySqrt($x) {
    if ($x == 0 || $x == 1) return $x;
    
    $low = 0;
    $high = $x;
    $res = 0;
    
    while ($low <= $high) {
        $mid = intval($low + ($high - $low) / 2);
        if ($mid == $x / $mid) {
            return $mid;
        } elseif ($mid > $x / $mid) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
            $res = $mid;
        }
    }
    
    return $res;
}

function mySqrt2($x, $accuracy) {
    if ($x < 0) return -1;
    
    $low = 0;
    $high = $x;
    $res = 0;
    
    while (abs($high - $low) > $accuracy) {
    	//echo "abs($high - $low):" . abs($high - $low) . "\r\n";
    	$mid = ($low + ($high - $low) / 2);
        if ($mid == $x / $mid) {
            return $mid;
        } elseif ($mid > $x / $mid) {
            $high = $mid;
        } else {
            $low = $mid;
        }
    }
        
    return $mid;
}

//echo "sqrt2({8}) = " . mySqrt2(100, 0.000001) . ";\r\n";
//die;
$arr = [8, 16, 20, 81, 100, 1000, 1111];
foreach ($arr as $value) {
	echo "sqrt({$value}) = " . mySqrt($value) . ";\r\n";
	echo "sqrt2({$value}) = " . mySqrt2($value, 0.000001) . ";\r\n";
}

