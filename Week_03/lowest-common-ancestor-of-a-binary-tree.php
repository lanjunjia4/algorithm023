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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q)
    {
        if ($root == $q || $root == $p || $root == null) return $root;
        $l = $this->lowestCommonAncestor($root->left, $p, $q);
        $r = $this->lowestCommonAncestor($root->right, $p, $q);

        if ($l == null) return $r;
        if ($r == null) return $l;
        return $root;
    }
}
