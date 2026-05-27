"""
Problem: 3Sum

Link: https://leetcode.com/problems/3sum/
"""

from typing import List


class Solution:
    def threeSum(self, nums: List[int]) -> List[List[int]]:
        nums.sort()

        result = []

        for i in range(len(nums)):

            # Skip duplicate values
            if i > 0 and nums[i] == nums[i - 1]:
                continue

            left = i + 1
            right = len(nums) - 1

            while left < right:

                total = nums[i] + nums[left] + nums[right]

                if total == 0:

                    result.append([
                        nums[i],
                        nums[left],
                        nums[right]
                    ])

                    left += 1
                    right -= 1

                    # Skip duplicates on the left
                    while left < right and nums[left] == nums[left - 1]:
                        left += 1

                    # Skip duplicates on the right
                    while left < right and nums[right] == nums[right + 1]:
                        right -= 1

                elif total < 0:
                    left += 1

                else:
                    right -= 1

        return result


# Example
nums = [-1, 0, 1, 2, -1, -4]

solution = Solution()

print(solution.threeSum(nums))