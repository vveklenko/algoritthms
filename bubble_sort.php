<?php

$array = [2, 5, 13, 0, 81, 64, 52, 11, 1, 2];

function bubbleSort($array) {
    $length = count($array);
    $temp = 0;

    for($i = 0; $i < $length; $i++) {
        for($j = 0; $j < $length - 1; $j++) {
            if($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

print_r(bubbleSort($array));
