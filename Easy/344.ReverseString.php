<?php

function reverseString(&$s) {
    $left = 0;
    $right = strlen($s) - 1;
    while ($left < $right) {
        $buffer = $s[$right];
        $s[$right] = $s[$left];
        $s[$left] = $buffer;
        $left++;
        $right--;
    }
    return;
}

$s = 'Hello';
reverseString($s);
echo $s;

?>