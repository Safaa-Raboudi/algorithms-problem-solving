"""
Problem: Lowest Common Ancestor of a Binary Search Tree

Link: https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/
"""

class TreeNode:
    def __init__(self, val = 0, left = None, right = None):
        self.val = val
        self.left = left
        self.right = right
        
        
class Solution:
    def lowestCommonAncestor(self, root: TreeNode, q: TreeNode, p: TreeNode ) -> TreeNode:
        while root:
            if q.val > root.val and p.val > root.val:
                root = root.right
            elif q.val < root.val and p.val < root.val:
                root = root.left
            else:
                return root
            
# Example
#
#         6
#       /   \
#      2     8
#     / \   / \
#    0   4 7   9
#       / \
#      3   5
#
# p = 2
# q = 8
#
# LCA = 6

root = TreeNode(6)

root.left = TreeNode(2)
root.right = TreeNode(8)

root.left.left = TreeNode(0)
root.left.right = TreeNode(4)

root.left.right.left = TreeNode(3)
root.left.right.right = TreeNode(5)

root.right.left = TreeNode(7)
root.right.right = TreeNode(9)

p = root.left      # 2
q = root.right     # 8

solution = Solution()

result = solution.lowestCommonAncestor(root, p, q)

print(result.val)  # 6