"""
Problem: Valid Parentheses

Link: https://leetcode.com/problems/valid-parentheses/
"""

class Solution:
    def isValid(self, s: str) -> bool:
        stack = []

        mapping = {
            ")": "(",
            "]": "[",
            "}": "{"
        }

        for char in s:

            if char in mapping:

                if not stack or stack[-1] != mapping[char]:
                    return False

                stack.pop()

            else:
                stack.append(char)

        return len(stack) == 0


# Example
s = "()[]{}"

solution = Solution()

print(solution.isValid(s))