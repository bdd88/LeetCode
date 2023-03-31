<?php

/*
// Brute force using a hashmap.
function nextGreaterElement($nums1, $nums2) {
    $nextGreatestTable = array();
    $arrayLength = sizeof($nums2);
    for ($i = 0; $i < $arrayLength; $i++) {
        $nextGreatest = NULL;
        for ($j = $i; $j < $arrayLength; $j++) {
            if ($nums2[$j] > $nums2[$i]) {
                $nextGreatest = $nums2[$j];
                break;
            }
        }
        $nextGreatest ??= -1;
        $nextGreatestTable[$nums2[$i]] = $nextGreatest;
    }

    $answer = array();
    foreach ($nums1 as $num) {
        $answer[] = $nextGreatestTable[$num];
    }
    return $answer;
}
*/

// Monotonic stack using a hashmap.
function nextGreaterElement($nums1, $nums2) {
    $map = array();
    $stack = array();
    foreach ($nums2 as $num) {
        while (end($stack) !== FALSE && $num > end($stack)) {
            $key = array_pop($stack);
            $map[$key] = $num;
        }
        $stack[] = $num;
    }
    foreach ($stack as $leftover) {
        $map[$leftover] = -1;
    }

    $answer = array();
    foreach ($nums1 as $num) {
        $answer[] = $map[$num];
    }
    return $answer;
}

$nums1 = [2,4];
$nums2 = [2,3,5,1,0,7,4];
var_dump(nextGreaterElement($nums1, $nums2));