<?php

// Class definition for single linked list nodes used for LeetCode solutions.
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

// Build a single linked list from an array of values.
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