<?php

/*
Problem: Lowest Common Ancestor of a Binary Search Tree

Link: https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/

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
    public function lowestCommonAncestor(
        ?TreeNode $root,
        TreeNode $p,
        TreeNode $q
    ): ?TreeNode {

        while ($root) {

            if (
                $p->val > $root->val &&
                $q->val > $root->val
            ) {
                $root = $root->right;

            } elseif (
                $p->val < $root->val &&
                $q->val < $root->val
            ) {
                $root = $root->left;

            } else {
                return $root;
            }
        }

        return null;
    }
}


// Example
//
//         6
//       /   \
//      2     8
//     / \   / \
//    0   4 7   9
//       / \
//      3   5
//
// p = 2
// q = 8
//
// LCA = 6

$root = new TreeNode(6);

$root->left = new TreeNode(2);
$root->right = new TreeNode(8);

$root->left->left = new TreeNode(0);
$root->left->right = new TreeNode(4);

$root->left->right->left = new TreeNode(3);
$root->left->right->right = new TreeNode(5);

$root->right->left = new TreeNode(7);
$root->right->right = new TreeNode(9);

$p = $root->left;   // 2
$q = $root->right;  // 8

$solution = new Solution();

$result = $solution->lowestCommonAncestor($root, $p, $q);

echo $result->val; // 6