<?php

function largestUniqueNumber($nums) {
    $hashmap = array();

    foreach ($nums as $num) {
        if (!isset($hashmap[$num])) {
            $hashmap[$num] = 0;
        }
        $hashmap[$num]++;
    }

    foreach ($hashmap as $number => $ocurrances) {
        if ($ocurrances === 1) {
            if (!isset($ans)) {
                $ans = $number;
            }
            if ($number > $ans) {
                $ans = $number;
            }
        }
    }

    if (!isset($ans)) {
        $ans = -1;
    }
    return $ans;
}

var_dump(largestUniqueNumber([9,9,8,8]));