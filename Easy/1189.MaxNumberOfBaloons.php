<?php

function maxNumberOfBalloons($text) {
    $characters = array('b' => 0, 'a' => 0, 'l' => 0, 'o' => 0, 'n' => 0, 's' => 0);
    for ($i = 0; $i < strlen($text); $i++) {
        if (isset($characters[$text[$i]])) {
            $characters[$text[$i]]++;
        }
    }
    $characters['l'] = floor($characters['l'] / 2);
    $characters['o'] = floor($characters['o'] / 2);
    return min($characters);
}

var_dump(maxNumberOfBalloons('balloonsballoons'));