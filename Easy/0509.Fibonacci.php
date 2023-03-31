<?php

class Solution {
    function fib($n, &$memo = array(0,1)) {
        if (!isset($memo[$n])) {
            $memo[$n] = $this->fib($n - 1, $memo) + $this->fib($n - 2, $memo);
        }
        return $memo[$n];
    }
}

$fib = new Solution();
echo "Value: " . $fib->fib(30) . PHP_EOL;