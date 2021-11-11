<?php

$array = [2, 2, 4, 7, 8, 14, 24, 36, 52, 48];

function binarySearch($array, $item) {
    $start = 0;
    $end = count($array);
    $middle;
    $found = false;
    $position = -1;

    while($found == false && $start <= $end) {
        $middle = floor(($start + $end) / 2);

        if($array[$middle] == $item) {
            $found = true;
            $position = $middle;
            return $position;
        }

        if($item < $array[$middle]) {
            $end = $middle - 1;
        }
        else {
            $start = $middle + 1;
        }
    }

    return $position;
}

echo binarySearch($array, 52)."\n";