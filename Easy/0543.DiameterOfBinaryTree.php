<?php

class Solution {
    private int $maxDiameter = 0;

    function diameterOfBinaryTree($root) {
        $this->checkDepth($root);
        return $this->maxDiameter;
    }

    function checkDepth($root) {
        if ($root === NULL) {
            return 0;
        }
        $left = $this->checkDepth($root->left);
        $right = $this->checkDepth($root->right);
        $this->maxDiameter = max($this->maxDiameter, $left + $right);

        return 1 + max($left, $right);
    }
}

require '../DataStructure.BinaryTree.php';
$tree = createBinaryTree([8,3,10,1,6,null,14,null,null,4,7,13]);
$solution = new Solution();
$answer = $solution->diameterOfBinaryTree($tree);
var_dump($answer);