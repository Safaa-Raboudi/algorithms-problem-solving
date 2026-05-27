<?php

/*
Problem: Longest Substring Without Repeating Characters

Link: https://leetcode.com/problems/longest-substring-without-repeating-characters/
*/

class Solution
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $seen = [];
        $left = 0;
        $maxLength = 0;
        $length = strlen($s);

        for ($right = 0; $right < $length; $right++) {
            while (isset($seen[$s[$right]])) {
                unset($seen[$s[$left]]);
                $left++;
            }

            $seen[$s[$right]] = true;

            $maxLength = max($maxLength, $right - $left + 1);
        }

        return $maxLength;
    }
}


// Example
$s = "abcabcbb";

$solution = new Solution();

echo $solution->lengthOfLongestSubstring($s);