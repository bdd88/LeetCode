<?php

function runningSum($nums) {
    $sums = [$nums[0]];
    for ($i = 1; $i < sizeof($nums); $i++) {
        $sums[$i] = $sums[$i - 1] + $nums[$i];
    }
    return $sums;
}

var_dump(runningSum([1,2,3,4]));
