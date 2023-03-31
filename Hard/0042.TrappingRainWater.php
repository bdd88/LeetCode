<?php

function trap($height) {
    $water = 0;
    $left = 0;
    $right = sizeof($height) - 1;
    $leftPeak = $height[$left];
    $rightPeak = $height[$right];

    while ($left <= $right) {
        if ($leftPeak <= $rightPeak) {
            $leftPeak = ($leftPeak < $height[$left]) ? $height[$left] : $leftPeak;
            $capacity = min($leftPeak, $rightPeak) - $height[$left];
            $left++;
        } else {
            $rightPeak = ($rightPeak < $height[$right]) ? $height[$right] : $rightPeak;
            $capacity = min($leftPeak, $rightPeak) - $height[$right];
            $right--;
        }
        $water += max($capacity, 0);
    }
    return $water;
}

var_dump(trap([5,5,1,7,1,1,5,2,7,6]));