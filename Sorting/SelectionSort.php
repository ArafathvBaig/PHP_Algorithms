<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Selection Sort Problem
 */
class SelectionSort
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function display($length, $sort)
    {
        for ($i = 0; $i < $length; $i++) {
            echo $sort[$i] . " ";
        }
    }

    /**
     * Function to sort array by selecting the smallest element
     * Passing the array and length as a parameter
     * Returns the sorted array returned from the swap_position Function
     */
    function selection_sort($length, $data)
    {
        for ($i = 0; $i < $length - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $length; $j++) {
                if ($data[$j] < $data[$min]) {
                    $min = $j;
                }
            }
            $data = $this->swap_positions($data, $i, $min);
        }
        return $data;
    }

    /**
     * Function to swap elements
     * Passing array, left and right as parameters
     * returns the array after swapping elements
     */
    function swap_positions($data1, $left, $right)
    {
        $temp = $data1[$right];
        $data1[$right] = $data1[$left];
        $data1[$left] = $temp;
        return $data1;
    }
}
$selectionSort = new SelectionSort();

$selectionSortArray = array(3, -5, 2, -2, 5, -1, 4, -3, 1, -4, 0);
$length = count($selectionSortArray);
echo "Original Array : ";
$selectionSort->display($length, $selectionSortArray);
echo "\nSorted Array : ";
$sortedArray = $selectionSort->selection_sort($length, $selectionSortArray);
$length = count($sortedArray);
$selectionSort->display($length, $sortedArray);
