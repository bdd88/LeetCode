<?php

class Solution {
    function minDepth($node, $depth = 1) {
        if ($node === NULL) {
            return 0;
        }

        if (isset($node->left) && isset($node->right)) {
            $minDepth = min($this->minDepth($node->left, $depth + 1), $this->minDepth($node->right, $depth + 1));
        } elseif (isset($node->left)) {
            $minDepth = $this->minDepth($node->left, $depth + 1);
        } elseif (isset($node->right)) {
            $minDepth = $this->minDepth($node->right, $depth + 1);
        } else {
            $minDepth = $depth;
        }

        return $minDepth;
    }
}

require '../DataStructure.BinaryTree.php';

$tree = createBinaryTree([2,null,3,null,4,null,5,null,6]);
$solution = new Solution();
echo $solution->minDepth($tree);