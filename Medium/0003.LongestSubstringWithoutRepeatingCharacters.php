<?php

function lengthOfLongestSubstring($s) {
    $set = array();
    $left = 0;
    $longest = 0;
    for ($right = 0; $right < strlen($s); $right++) {
        $rightChar = $s[$right];
        $set[$rightChar] ??= 0;
        $set[$rightChar]++;
        while ($set[$rightChar] > 1) {
            $leftChar = $s[$left];
            $set[$leftChar]--;
            $left++;
        }
        if (($right - $left + 1) > $longest) {
            $longest = $right - $left + 1;
        }
    }
    return $longest;
}

echo 'Return: ' . lengthOfLongestSubstring("") . PHP_EOL;