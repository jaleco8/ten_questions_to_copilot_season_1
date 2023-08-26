<?php
function binarySearch($arr, $x)
{
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($arr[$mid] == $x) {
            return $mid;
        }

        if ($arr[$mid] > $x) {
            $right = $mid - 1;
        } else {
            $left = $mid + 1;
        }
    }

    return -1;
}

$arr = array(2, 5, 7, 9, 11);
$x = 7;
$result = binarySearch($arr, $x);

if ($result == -1) {
    echo "El elemento no se encuentra en el arreglo";
} else {
    echo "El elemento se encuentra en el índice: " . $result;
}
