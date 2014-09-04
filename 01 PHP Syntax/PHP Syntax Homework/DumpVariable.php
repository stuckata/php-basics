<?php

$input = (object)[2,34];

if(is_numeric($input)){
    var_dump($input);
} else {
    if(is_array($input)){
        echo('array');
    } elseif(is_bool($input)) {
        echo('boolean');
    } elseif(is_string($input)){
        echo('string');
    } elseif(is_object($input)){
        echo('object');
    } elseif(is_null($input)){
        echo('null');
    }
}