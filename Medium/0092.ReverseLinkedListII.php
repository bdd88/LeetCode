<?php

function reverseBetween($head, $left, $right) {

    if ($left == $right) {
        return $head;
    }

    $sentHead = new ListNode('sentHead', $head);
    $node = $sentHead->next;
    $lastNode = $sentHead;
    for ($i = 1; $i <= $right; $i++) {
        $nextNode = $node->next;
        if ($i == $left) {
            $beforeSublist = $lastNode;
            $sublistStart = $node;
            $lastNode->next = NULL;
        }
        if ($i == $right) {
            $afterSublist = $node->next;
            $sublistEnd = $node;
        }
        if ($i >= $left && $i <= $right) {
            $node->next = $lastNode;
        }
        $lastNode = $node;
        $node = $nextNode;
    }
    $beforeSublist->next = $sublistEnd;
    $sublistStart->next = $afterSublist;

    return $sentHead->next;
}

require '../DataStructure.LinkedList.php';

$list = createLinkedList([3,5,7,4]);
$reversedList = reverseBetween($list, 1, 2);
var_dump(returnListValues($reversedList));