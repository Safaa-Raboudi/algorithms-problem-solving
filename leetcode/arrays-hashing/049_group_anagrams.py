"""
Problem: Group Anagrams

Link: https://leetcode.com/problems/group-anagrams/

"""

from collections import defaultdict
from typing import List


class Solution:
    def groupAnagrams(self, strs: List[str]) -> List[List[str]]:
        groups = defaultdict(list)

        for word in strs:
            key = "".join(sorted(word))
            groups[key].append(word)

        return list(groups.values())


# Example
strs = ["eat", "tea", "tan", "ate", "nat", "bat"]

solution = Solution()

print(solution.groupAnagrams(strs))