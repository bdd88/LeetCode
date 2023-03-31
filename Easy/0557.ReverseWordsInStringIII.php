<?php

function reverseWords($s) {
    $words = explode(' ', $s);
    $ans = array();
    foreach ($words as $word) {
        $left = 0;
        $right = strlen($word) - 1;
        $buffer = NULL;
        while ($left < $right) {
            $buffer = $word[$right];
            $word[$right] = $word[$left];
            $word[$left] = $buffer;
            $left++;
            $right--;
        }
        $ans[] = $word;
    }
    return implode(' ', $ans);
}
echo reverseWords("Let's take LeetCode contest");