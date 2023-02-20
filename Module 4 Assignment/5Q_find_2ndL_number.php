<?php

// Write a PHP function to find the second largest number in an array of numbers.

function find_2ndL_number($array) {
    $max = max($array);
    $max_index = array_search($max, $array);
    unset($array[$max_index]);
    return max($array);
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

echo find_2ndL_number($numbers);

// Output:
// 8
