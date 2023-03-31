<?php

function addTwoNumbers($l1, $l2) {
    $sentHead = new ListNode();
    $prev = $sentHead;
    $carry = 0;
    while ($l1 !== NULL || $l2 !== NULL || $carry > 0) {
        $curr = new ListNode($carry);
        $curr->val += ($l1 !== NULL) ? $l1->val : 0;
        $curr->val += ($l2 !== NULL) ? $l2->val : 0;
        $carry = 0;
        if ($curr->val > 9) {
            $curr->val -= 10;
            $carry++;
        }
        if ($l1 !== NULL) $l1 = $l1->next;
        if ($l2 !== NULL) $l2 = $l2->next;
        $prev->next = $curr;
        $prev = $curr;
    }
    return $sentHead->next;
}

require '../DataStructure.LinkedList.php';
$l1 = [9,9,9,9,9,9,9];
$l2 = [5,6,4];
$answer = addTwoNumbers(createLinkedList($l1), createLinkedList($l2));
var_dump($answer);
