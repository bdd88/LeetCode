<?php

function simplifyPath($path) {
    $stack = explode('/', $path);
    $canonPath = array();
    foreach ($stack as $elem) {

        if (empty($elem) || $elem === '.') {
            continue;
        }

        if ($elem === '..') {
            if (sizeof($canonPath) > 0) {
                array_pop($canonPath);
            }
        } else {
            array_push($canonPath, $elem);
        }
        
    }
    return '/' . implode('/', $canonPath);
}

var_dump(simplifyPath('/home///test/derp/.././lerp//'));