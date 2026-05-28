"""
Problem: Reverse Linked List

Link: https://leetcode.com/problems/reverse-linked-list/

"""

from typing import Optional


class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next


class Solution:
    def reverseList(
        self,
        head: Optional[ListNode]
    ) -> Optional[ListNode]:
        
        prev = None
        current = head
        
        while (current):
            next_node = current.next
            current.next = prev
            prev = current
            current = next_node
            
        return prev
    
# Example
# 1 -> 2 -> 3 -> 4 -> 5
#
# Reversed:
# 5 -> 4 -> 3 -> 2 -> 1

head = ListNode(
    1,
    ListNode(
        2,
        ListNode(
            3,
            ListNode(
                4,
                ListNode(5)
            )
        )
    )
)

solution = Solution()

result = solution.reverseList(head)

while result:
    print(result.val, end=" -> ")
    result = result.next         
        