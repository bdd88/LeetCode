<?php

function findWinners($matches) {
    $playerRecord = array();
    $ans = array(array(), array());

    foreach ($matches as $match) {
        foreach ($match as $player) {
            if (!isset($playerRecord[$player])) {
                $playerRecord[$player] = array('wins' => 0, 'losses' => 0);
            }
        }
        $playerRecord[$match[0]]['wins']++;
        $playerRecord[$match[1]]['losses']++;
    }

    foreach ($playerRecord as $player => $record) {
        if ($record['losses'] === 0) {
            $ans[0][] = $player;
        }
        if ($record['losses'] === 1) {
            $ans[1][] = $player;
        }
    }
    sort($ans[0]);
    sort($ans[1]);
    return $ans;
}

var_dump(findWinners([[1,3],[2,3],[3,6],[5,6],[5,7],[4,5],[4,8],[4,9],[10,4],[10,9]]));