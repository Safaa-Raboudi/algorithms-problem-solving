<?php

/*
Problem: Binary Search

Link: https://leetcode.com/problems/binary-search/

*/

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     *
     * @return int
     */
    public function search(array $nums, int $target): int
    {
        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right) {

            $mid = intval(($left + $right) / 2);

            if ($nums[$mid] === $target) {
                return $mid;

            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;

            } else {
                $right = $mid - 1;
            }
        }

        return -1;
    }
}


// Example
$nums = [-1, 0, 3, 5, 9, 12];
$target = 9;

// Step 1
// left = 0
// right = 5
// mid = 2 -> nums[mid] = 3
// 3 < 9 -> move left

// Step 2
// left = 3
// right = 5
// mid = 4 -> nums[mid] = 9
// Found target

$solution = new Solution();

echo $solution->search($nums, $target); // 4