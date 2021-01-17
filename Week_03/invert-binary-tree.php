<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution
{

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root)
    {
        $this->cercur($root);
        return $root;
    }

    function cercur($node)
    {
        if ($node == null) {
            return;
        }

        $temp = $node->left;
        $node->left = $node->right;
        $node->right = $temp;

        $this->cercur($node->left);
        $this->cercur($node->right);
        return;
    }
}
