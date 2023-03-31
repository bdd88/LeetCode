<?php

function minStartValue($nums) {
    $running = 0;
    $min = $nums[0];
    foreach ($nums as $num) {
        $running += $num;
        if ($running < $min) {
            $min = $running;
        }
    }
    if ($min < 1) {
        return abs($min) + 1;
    } else {
        return 1;
    }
}

echo minStartValue([1,2]);