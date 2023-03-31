<?php

class Solution {
    function closestValue($root, $target) {
        if ($target < $root->val && $root->left !== NULL) {
            $closest = $this->closestValue($root->left, $target);
        } elseif ($target > $root->val && $root->right !== NULL) {
            $closest = $this->closestValue($root->right, $target);
        } else {
            $closest = $root->val;
        }
        if (abs($root->val - $target) < abs($closest - $target)) {
            $closest = $root->val;
        }
        return $closest;
    }
}

require '../DataStructure.BinaryTree.php';
$tree = createBinaryTree([8,1]);
$solution = new Solution();
$closest = $solution->closestValue($tree, 6.0);
var_dump($closest);