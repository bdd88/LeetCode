<?php

// Class definition for binary tree nodes used for LeetCode solutions.
class TreeNode {
    public $val;
    public $left;
    public $right;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

/**
 * Build a binary tree from an array of values.
 * Null values indicate the absense of child nodes and the end of the subtree.
 * It is not necessary to include null values for non existant nodes (only where the subtree ends), IE:
 * [1,null,5,null,84,null,21] is a tree with a depth of 4 that has a single node at each level and always branches to the right.
 *      1
 *       \
 *        5
 *         \
 *          84
 *           \
 *            21
 */
function createBinaryTree(array $values): TreeNode | NULL
{
    if (end($values) === FALSE || end($values) === NULL) {
        return NULL;
    }
    $values = array_reverse($values);
    $root = new TreeNode(array_pop($values));
    $queue = array($root);
    $nextQueue = array();

    while (sizeof($values) > 0) {
        while (sizeof($queue) > 0) {
            $node = array_pop($queue);
            foreach (['left', 'right'] as $direction) {
                $value = array_pop($values);
                if ($value !== NULL) {
                    $nextQueue[] = $node->$direction = new TreeNode($value);
                }
            }
        }
        $queue = array_reverse($nextQueue);
        $nextQueue = array();
    }
    return $root;
}