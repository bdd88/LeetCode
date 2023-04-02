<?php

class Solution {
    private array $seen = array();
    private array $adjacencyMap = array();

    function countComponents($n, $edges) {
        foreach ($edges as $edge) {
            $this->adjacencyMap[$edge[0]][] = $edge[1];
            $this->adjacencyMap[$edge[1]][] = $edge[0];
        }

        $answer = 0;
        foreach ($this->adjacencyMap as $neighbors) {
            foreach ($neighbors as $vertex) {
                if (!isset($this->seen[$vertex])) {
                    $answer++;
                    $this->dfs($vertex);
                }
            }
        }

        $answer += ($n - sizeof($this->adjacencyMap));
        return $answer;
    }

    function dfs($vertex) {
        $this->seen[$vertex] = TRUE;
        foreach ($this->adjacencyMap[$vertex] as $neighbor) {
            if (!isset($this->seen[$neighbor])) {
                $this->dfs($neighbor);
            }
        }
    }
}

$solution = new Solution();
$answer = $solution->countComponents(4, [[2,3],[1,2],[1,3]]);
var_dump($answer);