<?php

function canConstruct($ransomNote, $magazine) {
    $characters = array();

    $magazine = str_split($magazine);
    foreach ($magazine as $letter) {
        if (!isset($characters[$letter])) {
            $characters[$letter] = 0;
        }
        $characters[$letter]++;
    }
    
    $ransomNote = str_split($ransomNote);
    foreach ($ransomNote as $letter) {
        if (!isset($characters[$letter])) {
            return FALSE;
        }
        if ($characters[$letter] < 1) {
            return FALSE;
        }
        $characters[$letter]--;
    }

    return TRUE;
}

var_dump(canConstruct('a', 'a'));