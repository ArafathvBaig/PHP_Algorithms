<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Interpolation Search Problem
 */
class InterpolationSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($searchArray, $x)
    {
        $lower = 0;
        $higher = count($searchArray) - 1;

        while ($lower <= $higher && $x >= $searchArray[$lower] && $x <= $searchArray[$higher]) {
            if ($lower == $higher) {
                if ($searchArray[$lower] == $x) return $lower;
                return -1;
            }

            // Probing the position with keeping 
            // uniform distribution in mind. 
            $m = intval($lower + (($x - $searchArray[$lower]) * ($higher - $lower) /
                ($searchArray[$higher] - $searchArray[$lower])));

            if ($searchArray[$m] == $x) {
                return $m;
            }

            // If x is larger i.e x is in upper part 
            elseif ($searchArray[$m] < $x) {
                $lower = $m + 1;
            }

            // If x is smaller i.e x is in the lower part 
            else {
                $higher = $m - 1;
            }
        }
        return -1;
    }
}
$interpolationSearch = new InterpolationSearch();

$searchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
$x = 10;
$result = $interpolationSearch->search($searchArray, $x);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}
