<?php

class Solution {
    function maxAncestorDiff($root, $max = NULL, $min = NULL) {
        $max ??= $root->val;
        $min ??= $root->val;

        $min = ($root->val < $min) ? $root->val : $min;
        $max = ($root->val > $max) ? $root->val : $max;

        if ($root->left === NULL && $root->right === NULL) {
            return $max - $min;
        } elseif ($root->right === NULL) {
            return $this->maxAncestorDiff($root->left, $max, $min);
        } elseif ($root->left === NULL) {
            return $this->maxAncestorDiff($root->right, $max, $min);
        } else {
            return max($this->maxAncestorDiff($root->left, $max, $min), $this->maxAncestorDiff($root->right, $max, $min));
        }
    }
}

require '../DataStructure.BinaryTree.php';

$tree = createBinaryTree([1,null,2,null,0,3]);
$solution = new Solution();
$ans = $solution->maxAncestorDiff($tree);
var_dump($ans);