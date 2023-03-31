<?php

function deleteDuplicates($head) {
    $lastNode = $head;
    $node = $head;
    while ($node != NULL) {
        if ($node->val === $lastNode->val) {
            $lastNode->next = $node->next;
        } else {
            $lastNode = $node;
        }
        $node = $node->next;
    }
    return $head;
}