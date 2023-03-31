<?php

function twoSum(array $nums, int $target){
    foreach ($nums as $index => $num) {
        $compliment = $target - $num;
        $complimentIndex = array_search($compliment, $nums);
        if ($complimentIndex !== FALSE) {
            if ($index !== $complimentIndex) {
                return [$index, $complimentIndex];
            }
        }
    }
}