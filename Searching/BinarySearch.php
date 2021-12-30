<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Binary Search Tree Problem
 */
class BinarySearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array, lower index, higher index and element to search as parameter
     * returns the index of element, if present
     * else returns -1 
     */
    function search($searchArray, $lower, $higher, $x)
    {
        if ($higher >= $lower) {
            $mid = ceil($lower + ($higher - $lower) / 2);

            if ($searchArray[$mid] == $x) {
                return $mid;
            } elseif ($searchArray[$mid] > $x) {
                return $this->search($searchArray, $lower, $mid - 1, $x);
            } else {
                return $this->search($searchArray, $mid + 1, $higher, $x);
            }
        } else {
            return -1;
        }
    }
}
$binarySearch = new BinarySearch();

$searchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
$lower = 0;
$higher = count($searchArray) - 1;
$x = 18;
$result = $binarySearch->search($searchArray, $lower, $higher, $x);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}
