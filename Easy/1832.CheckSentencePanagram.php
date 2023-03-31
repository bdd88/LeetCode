<?php

function checkIfPangram($sentence) {
    $hashmap = array();
    foreach (range('a', 'z') as $letter) {
        $hashmap[$letter] = FALSE;
    }

    $sentence = str_split($sentence);
    foreach ($sentence as $letter) {
        if ($hashmap[$letter] === FALSE) {
            $hashmap[$letter] = TRUE;
        }
    }

    if (in_array(FALSE, $hashmap)) {
        return FALSE;
    } else {
        return TRUE;
    }
    
}

var_dump(checkIfPangram("leetcode"));