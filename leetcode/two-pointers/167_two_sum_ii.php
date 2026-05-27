<?php

/*
Problem: Two Sum II - Input Array Is Sorted

Link: https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/

*/

class Solution
{
    /**
     * @param array $numbers
     * @param int $target
     * 
     * @return array
     */
    public function twoSum(array $numbers, int $target): array
    {
        $left = 0;
        $right = count($numbers) - 1;

        while ($left < $right) {

            $currentSum = $numbers[$left] + $numbers[$right];

            if ($currentSum === $target) {
                return [$left + 1, $right + 1];
            }

            if ($currentSum > $target) {
                $right--;
            } else {
                $left++;
            }
        }

        return [];
    }
}


// Example
$numbers = [2, 7, 11, 15];
$target = 9;

// Step 1
// left = 2
// right = 15
// currentSum = 17 > 9
// move right pointer

// Step 2
// left = 2
// right = 11
// currentSum = 13 > 9
// move right pointer

// Step 3
// left = 2
// right = 7
// currentSum = 9
// result = [1, 2]

$solution = new Solution();

print_r($solution->twoSum($numbers, $target));