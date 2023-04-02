<?php

class Solution {
    private array $grid;
    private array $visited = array();

    function maxAreaOfIsland($grid) {
        $this->grid = $grid;
        $largest = 0;
        foreach ($grid as $row => $cols) {
            foreach ($cols as $col => $island) {
                if ($island == 1) {
                    $largest = max($this->dfs($row, $col), $largest);
                }
            }
        }
        return $largest;
    }

    function dfs($row, $col) {
        $size = 0;
        if (isset($this->grid[$row][$col]) && $this->grid[$row][$col] == 1 && !isset($this->visited[$row][$col])) {
            $this->visited[$row][$col] = TRUE;
            $size++;
            foreach (array([$row + 1, $col], [$row, $col + 1], [$row - 1, $col], [$row, $col - 1]) as $coord) {
                $size += $this->dfs($coord[0],$coord[1]);
            }
        }
        return $size;
    }
}

$solution = new Solution();
$answer = $solution->maxAreaOfIsland([
    [0,0,1,0,0,0,0,1,0,0,0,0,0],
    [0,0,0,0,0,0,0,1,1,1,0,0,0],
    [0,1,1,0,1,0,0,0,0,0,0,0,0],
    [0,1,0,0,1,1,0,0,1,0,1,0,0],
    [0,1,0,0,1,1,0,0,1,1,1,0,0],
    [0,0,0,0,0,0,0,0,0,0,1,0,0],
    [0,0,0,0,0,0,0,1,1,1,0,0,0],
    [0,0,0,0,0,0,0,1,1,0,0,0,0]
]);
var_dump($answer);