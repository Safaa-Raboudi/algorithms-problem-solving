<?php

/*
Problem: 3Sum

Link: https://leetcode.com/problems/3sum/
*/

class Solution
{
    /**
     * @param int[] $nums
     *
     * @return int[][]
     */
    public function threeSum(array $nums): array
    {
        sort($nums);

        $result = [];

        for ($i = 0; $i < count($nums); $i++) {

            // Skip duplicate values
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $left = $i + 1;
            $right = count($nums) - 1;

            while ($left < $right) {

                $total = $nums[$i] + $nums[$left] + $nums[$right];

                if ($total === 0) {

                    $result[] = [
                        $nums[$i],
                        $nums[$left],
                        $nums[$right]
                    ];

                    $left++;
                    $right--;

                    // Skip duplicates on the left
                    while (
                        $left < $right &&
                        $nums[$left] === $nums[$left - 1]
                    ) {
                        $left++;
                    }

                    // Skip duplicates on the right
                    while (
                        $left < $right &&
                        $nums[$right] === $nums[$right + 1]
                    ) {
                        $right--;
                    }

                } elseif ($total < 0) {
                    $left++;
                } else {
                    $right--;
                }
            }
        }

        return $result;
    }
}


// Example
$nums = [-1, 0, 1, 2, -1, -4];

$solution = new Solution();

print_r($solution->threeSum($nums));