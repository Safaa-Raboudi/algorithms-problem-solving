<?php

/*
Problem: Top K Frequent Elements

Link: https://leetcode.com/problems/top-k-frequent-elements/
*/

class Solution
{
    /**
     * @param array $nums
     * @param int $k
     * 
     * @return array
     */
    public function topKFrequent(array $nums, int $k): array
    {
        $freq = [];

        foreach ($nums as $num) {
            $freq[$num] = ($freq[$num] ?? 0) + 1;
        }

        arsort($freq);

        return array_slice(array_keys($freq), 0, $k);
    }
}

// Example
$nums = [1, 1, 1, 2, 2, 3];
$k = 2;

$solution = new Solution();

print_r($solution->topKFrequent($nums, $k));