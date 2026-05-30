<?php

/*
Problem: Invert Binary Tree

Link: https://leetcode.com/problems/invert-binary-tree/
*/

class TreeNode
{
    public int $val;
    public ?TreeNode $left;
    public ?TreeNode $right;

    public function __construct(
        int $val = 0,
        ?TreeNode $left = null,
        ?TreeNode $right = null
    ) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{
    public function invertTree(?TreeNode $root): ?TreeNode
    {
        // Base case
        if (!$root) {
            return null;
        }

        // Swap left and right
        [$root->left, $root->right] = [
            $root->right,
            $root->left
        ];

        // Recursive calls
        $this->invertTree($root->left);
        $this->invertTree($root->right);

        return $root;
    }
}


// Example
// Original tree:
//
//       4
//     /   \
//    2     7
//   / \   / \
//  1   3 6   9
//
// Inverted tree:
//
//       4
//     /   \
//    7     2
//   / \   / \
//  9   6 3   1

$root = new TreeNode(
    4,
    new TreeNode(
        2,
        new TreeNode(1),
        new TreeNode(3)
    ),
    new TreeNode(
        7,
        new TreeNode(6),
        new TreeNode(9)
    )
);

$solution = new Solution();

$result = $solution->invertTree($root);


// Preorder print
function printTree($node)
{
    if (!$node) {
        return;
    }

    echo $node->val . " ";

    printTree($node->left);
    printTree($node->right);
}

printTree($result);