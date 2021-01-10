<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root)
    {
        $res = [];
        $stack = [];
        while (count($stack) != 0 || $root != null) {
            while ($root != null) {
                $res[] = $root->val;
                $stack[] = $root;
                $root = $root->left;
            }
            $root = array_pop($stack);
            $root = $root->right;
        }
        return $res;
    }


    function preorderTraversal2($root)
    {
        $res = [];
        $stack = [];
        $stack[] = $root;
        while (count($stack) != 0) {
            $node = array_pop($stack);
            $res[] = $node->val;
            if ($node->right != null) {
                $stack[] = $node->right;
            }
            if ($node->left != null) {
                $stack[] = $node->left;
            }
        }
        return $res;
    }
}
