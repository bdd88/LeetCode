<?php

class Solution {
    private array $grid = array();
    private array $seen = array();

    function numIslands($grid) {
        $this->grid = $grid;
        $rowCount = sizeof($this->grid);
        $colCount = sizeof($this->grid[0]);
        $ans = 0;
        for ($row = 0; $row < $rowCount; $row++) {
            for ($col = 0; $col < $colCount; $col++) {
                if (!isset($this->seen[$row][$col]) && $this->grid[$row][$col] == 1) {
                    $ans++;
                    $this->dfs($row, $col);
                }
            }
        }
        return $ans;
    }

    function dfs ($row, $col) {
        $this->seen[$row][$col] = TRUE;
        $directions = array([$row + 1, $col], [$row, $col + 1], [$row - 1, $col], [$row, $col - 1]);
        foreach ($directions as $direction) {
            $neighborRow = $direction[0];
            $neighborCol = $direction[1];
            if (isset($this->grid[$neighborRow][$neighborCol])) {
                if (!isset($this->seen[$neighborRow][$neighborCol]) && $this->grid[$neighborRow][$neighborCol] == 1) {
                    $this->dfs($neighborRow, $neighborCol);
                }
            }
        }
    }
}

$input = [
    ["1","1","1","1","0"],
    ["1","1","0","1","0"],
    ["1","1","0","0","0"],
    ["0","0","0","0","0"]
];
$solution = new Solution();
$answer = $solution->numIslands($input);
var_dump($answer);