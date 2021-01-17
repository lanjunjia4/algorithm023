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
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder)
    {
        return $this->helperBuildTree($preorder, 0, count($preorder), $inorder, 0, count($inorder));
    }

    function helperBuildTree($preorder, $pStart, $pLen, $inorder, $iStart, $iLen)
    {
        if ($pStart == $pLen) return null;
        $val = $preorder[$pStart];

        $index = 0;
        for ($i = $iStart; $i < $iLen; $i++) {
            if ($inorder[$i] == $val) {
                $index = $i;
                break;
            }
        }

        $leftNum = $index - $iStart;

        $node = new TreeNode($val);
        $node->left = $this->helperBuildTree($preorder, $pStart + 1, $pStart + $leftNum + 1, $inorder, $iStart, $index);
        $node->right = $this->helperBuildTree($preorder, $pStart + $leftNum + 1, $pLen, $inorder, $index + 1, $iLen);
        return $node;
    }
}
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value)
    {
        $this->val = $value;
    }
}
