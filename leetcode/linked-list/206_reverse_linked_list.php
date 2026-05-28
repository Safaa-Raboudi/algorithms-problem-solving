<?php

/*
Problem: Reverse Linked List

Link: https://leetcode.com/problems/reverse-linked-list/

*/

class ListNode
{
    public int $val;
    public ?ListNode $next;

    public function __construct(
        int $val = 0,
        ?ListNode $next = null
    ) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    public function reverseList(?ListNode $head): ?ListNode
    {
        $prev = null;
        $current = $head;

        while ($current) {

            $nextNode = $current->next;

            $current->next = $prev;

            $prev = $current;

            $current = $nextNode;
        }

        return $prev;
    }
}


// Example
// 1 -> 2 -> 3 -> 4 -> 5
//
// Reversed:
// 5 -> 4 -> 3 -> 2 -> 1

$head = new ListNode(
    1,
    new ListNode(
        2,
        new ListNode(
            3,
            new ListNode(
                4,
                new ListNode(5)
            )
        )
    )
);

$solution = new Solution();

$result = $solution->reverseList($head);

while ($result) {
    echo $result->val;

    if ($result->next) {
        echo " -> ";
    }

    $result = $result->next;
}