<?php

/*
Problem: Group Anagrams

Link: https://leetcode.com/problems/group-anagrams/

*/

class Solution
{
    /**
     * @param array $strs
     * 
     * @return array
     */
    public function groupAnagrams(array $strs): array
    {
        $groups = [];

        foreach ($strs as $word) {

            $chars = str_split($word);
            sort($chars);

            $key = implode("", $chars);

            if (!isset($groups[$key])) {
                $groups[$key] = [];
            }

            $groups[$key][] = $word;
        }

        return array_values($groups);
    }
}


// Example
$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];

$solution = new Solution();

print_r($solution->groupAnagrams($strs));