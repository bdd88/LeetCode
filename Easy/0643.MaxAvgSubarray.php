<?php

function findMaxAverage(array $nums, int $k): float
{
    $left = 0;
    $right = $left + $k - 1;
    $elements = sizeof($nums);
    $ans = NULL;
    $windowValue = NULL;

    while ($right < $elements) {
        if ($left === 0) {
            for ($i = 0; $i < $k; $i++) {
                $windowValue += $nums[$left + $i];
            }
            $ans = $windowValue;
        } else {
            $windowValue -= $nums[$left - 1];
            $windowValue += $nums[$right];
            if ($windowValue > $ans) {
                $ans = $windowValue;
            }
        }
        $left++;
        $right++;
    }
    return $ans / $k;
}

echo findMaxAverage([-1], 1);

?>