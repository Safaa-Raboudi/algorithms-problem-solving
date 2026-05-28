"""
Problem: Binary Search

Link: https://leetcode.com/problems/binary-search/
"""

from typing import List


class Solution:
    def search(self, nums: List[int], target: int) -> int:
        left = 0
        right = len(nums) - 1

        while left <= right:

            mid = (left + right) // 2

            if nums[mid] == target:
                return mid

            elif nums[mid] < target:
                left = mid + 1

            else:
                right = mid - 1

        return -1


# Example
nums = [-1, 0, 3, 5, 9, 12]
target = 9

# Step 1
# left = 0
# right = 5
# mid = 2 -> nums[mid] = 3
# 3 < 9 -> move left

# Step 2
# left = 3
# right = 5
# mid = 4 -> nums[mid] = 9
# Found target

solution = Solution()

print(solution.search(nums, target))  # 4