<?php

function longestOnes($nums, $k) {
    $left = 0;
    $right = 0;
    $elements = sizeof($nums);
    $flipped = 0;

    while ($right < $elements) {
        if ($nums[$right] === 0) {
            $flipped++;
        }
        $right++;

        if ($flipped > $k) {
            if ($nums[$left] === 0) {
                $flipped--;
            }
            $left++;
        }
    }
    return $right - $left;
}

echo longestOnes([1,1,1,0,0,0,1,1,1,1,0], 2);
?>