<?php

// function deepestLeavesSum($root) {
//     $nextQueue = array($root);
//     while (sizeof($nextQueue) > 0) {
//         $queue = $nextQueue;
//         $nextQueue = array();
//         foreach ($queue as $node) {
//             foreach (['left', 'right'] as $direction) {
//                 if ($node->$direction !== NULL) {
//                     $nextQueue[] = $node->$direction;
//                 }
//             }
//         }
//     }
//     $sum = 0;
//     foreach ($queue as $node) {
//         $sum += $node->val;
//     }
//     return $sum;
// }

function deepestLeavesSum($root) {
    $queue = array($root);
    while (sizeof($queue) > 0) {
        $sum = 0;
        $nodeCount = sizeof($queue);
        for ($i = 0; $i < $nodeCount; $i++) {
            $node = array_shift($queue);
            $sum += $node->val;
            if ($node->left !== NULL) $queue[] = $node->left;
            if ($node->right !== NULL) $queue[] = $node->right;
        }
    }
    return $sum;
}

require '../DataStructure.BinaryTree.php';
$tree = createBinaryTree([1,2,3,4,5,null,6,7,null,null,null,null,8]);
$answer = deepestLeavesSum($tree);
var_dump($answer);