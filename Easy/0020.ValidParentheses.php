<?php

class Solution {
    function isValid(string $s): bool {
        $stringArray = str_split($s);
        $openTypes = array('(', '[', '{');
        $closeTypes = array(')', ']', '}');
        $open = array();
        foreach ($stringArray as $entry) {
            if (array_search($entry, $openTypes) !== FALSE) {
                array_push($open, $entry);
            } else {
                $entryIndex = array_search($entry, $closeTypes);
                $lastOpenIndex = array_search(end($open), $openTypes);
                if ($entryIndex === $lastOpenIndex) {
                    array_pop($open);
                } else {
                    return FALSE;
                }
            }
        }
        if (count($open) === 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}