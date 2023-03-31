<?php

function makeGood($s) {
    $s = str_split($s);
    $goodString = array();
    foreach ($s as $elem) {
        if (strtolower($elem) === strtolower(end($goodString))) {
            if ($elem != end($goodString)) {
                array_pop($goodString);
                continue;
            }
        }
        $goodString[] = $elem;
    }
    return implode('', $goodString);
}

var_dump(makeGood('leEeetcode'));
