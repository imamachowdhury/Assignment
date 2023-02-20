<?php

// Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenate($a, $b) {
    return $a . strrev($b);
}

echo concatenate('abc', 'def');