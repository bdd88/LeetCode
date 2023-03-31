<?php

function sortedSquares($nums) {
    $squared = array();
    foreach($nums as $num) {
        $squared[] = $num * $num;
    }
    sort($squared, SORT_NUMERIC);
    return $squared;
}

var_dump(sortedSquares([-7,-3,2,3,11]));