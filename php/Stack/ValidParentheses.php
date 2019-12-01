<?php

// 括号匹配问题
// https://leetcode-cn.com/problems/valid-parentheses/
function isValid($s) {
    if (empty($s)) return true;
    $strArr = str_split($s);      
    $patternMap = [")" => "(", "}" => "{", "]" => "["];
    $stack = [];   
    foreach ($strArr as $char) {
        if (!isset($patternMap[$char])) {
            array_push($stack, $char);
        } elseif (empty($stack) || $patternMap[$char] != array_pop($stack)) {
            return false;
        } 
    }
    return !$stack;
}

$tests = ["()[]{}", "(]", "([)]", "{[]}"];
foreach ($tests as $value) {
	echo $value . "是否匹配:" . (isValid($value) ? "是" : "否") . "\r\n";
}