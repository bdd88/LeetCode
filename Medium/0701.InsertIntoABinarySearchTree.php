<?php

class Solution {
    function insertIntoBST($root, $val) {
        if ($root === NULL) {
            return new TreeNode($val);
        }
        if ($val < $root->val) {
            if ($root->left !== NULL) {
                $this->insertIntoBST($root->left, $val);
            } else {
                $root->left = new TreeNode($val);
            }
        }
        if ($val > $root->val) {
            if ($root->right !== NULL) {
                $this->insertIntoBST($root->right, $val);
            } else {
                $root->right = new TreeNode($val);
            }
        }
        return $root;
    }
}

require '../DataStructure.BinaryTree.php';
$tree = createBinaryTree([40,20,60,10,30,50,70]);
$solution = new Solution();
$answer = $solution->insertIntoBST($tree, 25);
var_dump($answer);