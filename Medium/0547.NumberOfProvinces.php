<?php

class Solution {
    private array $graph = array();
    private array $seen = array();

    function findCircleNum($isConnected) {
        $n = sizeof($isConnected);
        for ($i = 0; $i < $n; $i++) {
            if (!isset($this->graph[$i])) {
                $this->graph[$i] = array();
            }
            for ($j = $i + 1; $j < $n; $j++) {
                if (!isset($this->graph[$j])) {
                    $this->graph[$j] = array();
                }
                if ($isConnected[$i][$j] === 1) {
                    $this->graph[$i][] = $j;
                    $this->graph[$j][] = $i;
                }
            }
        }

        $ans = 0;
        for ($i = 0; $i < $n; $i++) {
            if (!isset($this->seen[$i])) {
                $ans++;
                $this->seen[$i] = TRUE;
                $this->dfs($i);
            }
        }

        return $ans;
    }

    function dfs($node) {
        foreach ($this->graph[$node] as $neighbor) {
            if (!isset($this->seen[$neighbor])) {
                $this->seen[$neighbor] = TRUE;
                $this->dfs($neighbor);
            }
        }
    }
}

$solution = new Solution();
$answer = $solution->findCircleNum([[1,1,0],[1,1,0],[0,0,1]]);
var_dump($answer);