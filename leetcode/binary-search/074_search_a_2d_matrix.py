"""
Problem: Search a 2D Matrix

Link: https://leetcode.com/problems/search-a-2d-matrix/

"""

from typing import List


class Solution:
    def searchMatrix(self, matrix: List[List[int]], target: int) -> bool:

        rows = len(matrix)
        cols = len(matrix[0])

        for row in range(rows):

            # Check if target can exist in this row
            if (
                target >= matrix[row][0] and
                target <= matrix[row][cols - 1]
            ):

                left = 0
                right = cols - 1

                # Binary search inside the row
                while left <= right:

                    mid = (left + right) // 2

                    if matrix[row][mid] == target:
                        return True

                    elif matrix[row][mid] < target:
                        left = mid + 1

                    else:
                        right = mid - 1

        return False


# Example
matrix = [
    [1, 3, 5, 7],
    [10, 11, 16, 20],
    [23, 30, 34, 60]
]

target = 3

solution = Solution()

print(solution.searchMatrix(matrix, target))