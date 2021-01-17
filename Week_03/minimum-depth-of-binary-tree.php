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
     * @return Integer
     */
    function minDepth($root)
    {
        return $this->getHeight($root);
    }

    function getHeight($node)
    {
        if ($node == null) {
            return 0;
        }

        if ($node->left == null && $node->right == null) {
            return 1;
        }

        $l = $this->getHeight($node->left);
        $r = $this->getHeight($node->right);

        if ($node->left == null || $node->right == null) return $l + $r + 1;

        if ($l > $r) {
            return $r + 1;
        } else {
            return $l + 1;
        }
    }
}
