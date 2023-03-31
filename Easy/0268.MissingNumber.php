<?php

function missingNumber($nums) {
    $n = sizeof($nums);
    return ($n * ($n + 1) / 2) - array_sum($nums);
}

echo missingNumber([9,6,4,2,3,5,7,0,1]);