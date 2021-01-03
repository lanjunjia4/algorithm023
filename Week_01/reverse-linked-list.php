<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head)
    {
        $cur = $head;
        $prev = null;
        while ($cur != null) {
            $temp = $cur->next;
            $cur->next = $prev;
            $prev = $cur;
            $cur = $temp;
        }
        return $prev;
    }
}
