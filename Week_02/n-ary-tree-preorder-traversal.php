<?php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution
{
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root)
    {
        $res = [];
        $stack = [];

        $stack[] = $root;
        while (count($stack) != 0) {
            $node = array_pop($stack);
            $res[] = $node->val;
            $len = count($node->children);

            for ($i = $len - 1; $i >= 0; $i--) {
                $stack[] = $node->children[$i];
            }
        }
        return $res;
    }
}
