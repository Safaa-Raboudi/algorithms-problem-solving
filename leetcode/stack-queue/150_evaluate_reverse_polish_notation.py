"""
Problem: Evaluate Reverse Polish Notation

Link: https://leetcode.com/problems/evaluate-reverse-polish-notation/

"""

from typing import List


class Solution:
    def evalRPN(self, tokens: List[str]) -> int:
        stack = []

        for token in tokens:

            if token not in "+-*/":
                stack.append(int(token))

            else:

                val1 = stack.pop()
                val2 = stack.pop()

                if token == "+":
                    stack.append(val1 + val2)

                elif token == "-":
                    stack.append(val2 - val1)

                elif token == "*":
                    stack.append(val1 * val2)

                else:
                    stack.append(int(val2 / val1))

        return stack.pop()


# Example
tokens = ["2", "1", "+", "3", "*"]

# Stack progression:
# [2]
# [2, 1]
# [3]
# [3, 3]
# [9]

solution = Solution()

print(solution.evalRPN(tokens))  # 9