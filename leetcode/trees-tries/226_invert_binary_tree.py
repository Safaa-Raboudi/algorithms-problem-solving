"""
Problem: Invert Binary Tree

Link:
https://leetcode.com/problems/invert-binary-tree/
"""

from typing import Optional


class TreeNode:
    def __init__(
        self,
        val=0,
        left=None,
        right=None
    ):
        self.val = val
        self.left = left
        self.right = right


class Solution:
    def invertTree(
        self,
        root: Optional[TreeNode]
    ) -> Optional[TreeNode]:

        # Base case
        if not root:
            return None

        # Swap left and right
        root.left, root.right = root.right, root.left

        # Recursive calls
        self.invertTree(root.left)
        self.invertTree(root.right)

        return root


# Example
# Original tree:
#
#       4
#     /   \
#    2     7
#   / \   / \
#  1   3 6   9
#
# Inverted tree:
#
#       4
#     /   \
#    7     2
#   / \   / \
#  9   6 3   1

root = TreeNode(
    4,
    TreeNode(
        2,
        TreeNode(1),
        TreeNode(3)
    ),
    TreeNode(
        7,
        TreeNode(6),
        TreeNode(9)
    )
)

solution = Solution()

result = solution.invertTree(root)


# Preorder print
def print_tree(node):
    if not node:
        return

    print(node.val, end=" ")

    print_tree(node.left)
    print_tree(node.right)


print_tree(result)