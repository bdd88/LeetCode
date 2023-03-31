<?php

function numJewelsInStones($jewels, $stones) {
    $map = array();
    $stones = str_split($stones);
    $jewels = str_split($jewels);
    $jewelCount = 0;
    foreach ($stones as $stone) {
        $map[$stone] ??= 0;
        $map[$stone]++;
    }
    foreach ($jewels as $jewel) {
        $jewelCount += $map[$jewel];
    }
    return $jewelCount;
}

echo numJewelsInStones("aA", "aAAbbbb"); 