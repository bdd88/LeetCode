<?php

class Solution {

    function isValidBST($root, $low = NULL, $high = NULL) {
        if ($root === NULL) return;

        if (
            ($low !== NULL && $root->val <= $low) || 
            ($high !== NULL && $root->val >= $high) ||
            ($root->left !== NULL && $this->isValidBST($root->left, $low, $root->val) === FALSE) ||
            ($root->right !== NULL && $this->isValidBST($root->right, $root->val, $high) === FALSE)
            ) {
            return FALSE;
        }

        return TRUE;
    }
}

require '../DataStructure.BinaryTree.php';
$tree = createBinaryTree([5,4,6,null,null,3,7]);
$solution = new Solution();
$answer = $solution->isValidBST($tree);
var_dump($answer);
