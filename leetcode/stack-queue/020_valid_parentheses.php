<?php

/*
Problem: Valid Parentheses

Link: https://leetcode.com/problems/valid-parentheses/
*/

class Solution
{
    public function isValid(string $s): bool
    {
        $stack = [];

        $mapping = [
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];

        foreach (str_split($s) as $char) {

            if (isset($mapping[$char])) {

                if (
                    empty($stack) ||
                    end($stack) !== $mapping[$char]
                ) {
                    return false;
                }

                array_pop($stack);

            } else {
                $stack[] = $char;
            }
        }

        return empty($stack);
    }
}


// Example
$s = "()[]{}";

$solution = new Solution();

var_dump($solution->isValid($s));