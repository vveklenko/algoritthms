<?php

$array = [2, 5, 13, 0, 81, 64, 52, 11, 1, 2];

function selectionSort($array) {
    $length = count($array);

    for($i = 0; $i < $length; $i++) {
        $min_index = $i;

        for($j = $i + 1; $j < $length; $j++) {
            if($array[$j] < $array[$min_index]) {
                $min_index = $j;
            }
        }

        $temp = $array[$i];
        $array[$i] = $array[$min_index];
        $array[$min_index] = $temp;
    }

    return $array;
}

print_r(selectionSort($array));
