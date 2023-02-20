<?php

// Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function remove_firstNlast($array) {
    array_shift($array);
    array_pop($array);
    return $array;
}

$strings = array('abc', 'def', 'ghij', 'klmno', 'pqrstu', 'vwxyz');

print_r(remove_firstNlast($strings));

// Output:
// Array
// (
//     [0] => def
//     [1] => ghij
//     [2] => klmno
//     [3] => pqrstu
// )