<?php

/*
Problem: Search a 2D Matrix

Link: https://leetcode.com/problems/search-a-2d-matrix/

*/

class Solution
{
    /**
     * @param int[][] $matrix
     * @param int $target
     *
     * @return bool
     */
    public function searchMatrix(array $matrix, int $target): bool
    {
        $rows = count($matrix);
        $cols = count($matrix[0]);

        $row = 0;

        while ($row < $rows) {

            // Check if target can exist in this row
            if (
                $target >= $matrix[$row][0]
                &&
                $target <= $matrix[$row][$cols - 1]
            ) {

                $left = 0;
                $right = $cols - 1;

                // Binary search inside the row
                while ($left <= $right) {

                    $mid = intval(($left + $right) / 2);

                    if ($matrix[$row][$mid] === $target) {
                        return true;

                    } elseif ($matrix[$row][$mid] < $target) {
                        $left = $mid + 1;

                    } else {
                        $right = $mid - 1;
                    }
                }
            }

            $row++;
        }

        return false;
    }
}


// Example
$matrix = [
    [1, 3, 5, 7],
    [10, 11, 16, 20],
    [23, 30, 34, 60]
];

$target = 3;

$solution = new Solution();

var_dump($solution->searchMatrix($matrix, $target));