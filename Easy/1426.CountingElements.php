<?php

function countElements($arr) {
    $hashset = array();
    $ans = 0;
    foreach ($arr as $element) {
        $hashset[$element] = $element;
    }
    foreach ($arr as $element) {
        if (isset($hashset[$element + 1])) {
            $ans++;
        }
    }
    return $ans;
}

var_dump(countElements([1,1,2,2]));