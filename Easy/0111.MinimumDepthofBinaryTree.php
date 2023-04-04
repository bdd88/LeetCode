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