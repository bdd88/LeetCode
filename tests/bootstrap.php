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


// Build a binary tree from an array of values, as typically supplied by LeetCode.
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

// Class definition for single linked list nodes used for LeetCode solutions.
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

// Build a single linked list from an array of values, as typically provided by LeetCode.
function createLinkedList(array $values): ListNode
{
    $sentHead = new ListNode(NULL, NULL);
    $node = $sentHead;
    foreach ($values as $value) {
        $node->next = new ListNode($value, NULL);
        $node = $node->next;
    }
    return $sentHead->next;
}

// Build an array containing the values of each node in a linked list.
function returnListValues(ListNode $list): array
{
    $listValues = array();
    while ($list != NULL) {
        $listValues[] = $list->val;
        $list = $list->next;
    }
    return $listValues;
}