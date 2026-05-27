"""
Problem: Two Sum II - Input Array Is Sorted

Link: https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/

"""

from typing import List


class Solution:
    def twoSum(self, numbers: List[int], target: int) -> List[int]:
        left = 0
        right = len(numbers) - 1

        while left < right:
            current_sum = numbers[left] + numbers[right]

            if current_sum == target:
                return [left + 1, right + 1]

            if current_sum > target:
                right -= 1
            else:
                left += 1


# Example
numbers = [2, 7, 11, 15]
target = 9

# Step 1
# left = 2
# right = 15
# current_sum = 17 > 9
# move right pointer

# Step 2
# left = 2
# right = 11
# current_sum = 13 > 9
# move right pointer

# Step 3
# left = 2
# right = 7
# current_sum = 9
# result = [1, 2]

solution = Solution()

print(solution.twoSum(numbers, target))