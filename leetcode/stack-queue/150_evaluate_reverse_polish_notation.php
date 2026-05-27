<?php

/*
Problem: Evaluate Reverse Polish Notation

Link: https://leetcode.com/problems/evaluate-reverse-polish-notation/
*/

class Solution
{
    /**
     * @param string[] $tokens
     *
     * @return int
     */
    public function evalRPN(array $tokens): int
    {
        $stack = [];

        foreach ($tokens as $token) {

            if (!in_array($token, ['+', '-', '*', '/'], true)) {
                $stack[] = (int) $token;

            } else {

                $val1 = array_pop($stack);
                $val2 = array_pop($stack);

                if ($token === '+') {
                    $stack[] = $val1 + $val2;

                } elseif ($token === '-') {
                    $stack[] = $val2 - $val1;

                } elseif ($token === '*') {
                    $stack[] = $val1 * $val2;

                } else {
                    $stack[] = (int) ($val2 / $val1);
                }
            }
        }

        return array_pop($stack);
    }
}


// Example
$tokens = ["2", "1", "+", "3", "*"];

// Stack progression:
// [2]
// [2, 1]
// [3]
// [3, 3]
// [9]

$solution = new Solution();

echo $solution->evalRPN($tokens); // 9