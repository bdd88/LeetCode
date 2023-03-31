<?php

function zigzagLevelOrder($root) {
    if ($root === NULL) {
        return array();
    }
    $queue = array($root);
    $nextQueue = array();
    $answer = array();

    while (sizeof($queue) > 0) {
        $nodeVals = array();
        foreach ($queue as $node) {
            $nodeVals[] = $node->val;
            foreach (['left', 'right'] as $direction) {
                if ($node->$direction !== NULL) {
                    $nextQueue[] = $node->$direction;
                }
            }
        }
        if (sizeof($answer) % 2 == 0) {
            $answer[] = $nodeVals;
        } else {
            $answer[] = array_reverse($nodeVals);
        }
        $queue = $nextQueue;
        $nextQueue = array();
    }
    return $answer;
}

require '../DataStructure.BinaryTree.php';
$tree = createBinaryTree([]);
$answer = zigzagLevelOrder($tree);
var_dump($answer);