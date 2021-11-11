<?php

$array = [2, 5, 13, 0, 81, 64, 52, 11, 1, 2];

function linearSearch($array, $item) {
    $length = count($array);

    for($i = 0; $i < $length; $i++) {
        if($array[$i] == $item)
            return $i;
    }

    return 'null';
}

echo linearSearch($array, 10)."\n";
