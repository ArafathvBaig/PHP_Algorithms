<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Linear Search Problem
 */
class LinearSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($linearSearchArray, $x)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $x)
                return $i;
        }
        return -1;
    }
}
$linearSearch = new LinearSearch();

$linearSearchArray = array(99, 1, 85, 10, 100, 2, 3, 20, 5, 4);
$x = 10;
$result = $linearSearch->search($linearSearchArray, $x);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}
