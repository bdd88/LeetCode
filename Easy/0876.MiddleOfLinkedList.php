<?php

function middleNode($head) {
    $fast = $head;
    while ($fast != NULL && $fast->next != NULL) {
        $head = $head->next;
        $fast = $fast->next->next;
    }
    return $head;
}

require '../DataStructure.LinkedList.php';

$list = createLinkedList([1,2,3]);
$middle = middleNode($list);
var_dump(returnListValues($middle));