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
    function maxDepth($root)
    {
        return $this->getHeight($root);
    }

    function getHeight($node)
    {
        if ($node == null) {
            return 0;
        }

        $l = 0;
        if ($node->left != null) {
            $l = $this->getHeight($node->left);
        }
        $r = 0;
        if ($node->right != null) {
            $r = $this->getHeight($node->right);
        }
        if ($l > $r) {
            return $l + 1;
        } else {
            return $r + 1;
        }
    }
}
