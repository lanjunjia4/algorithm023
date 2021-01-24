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
     * DFS
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root)
    {
        if ($root == null) return [];
        $res = [];
        $this->cur($root, 0, $res);
        return $res;
    }

    function cur($node, $level, &$res)
    {
        $res[$level][] = $node->val;
        if ($node->left != null) {
            $this->cur($node->left, $level + 1, $res);
        }
        if ($node->right != null) {
            $this->cur($node->right, $level + 1, $res);
        }
    }

    //BFS
    function levelOrder2($root)
    {
        if ($root == null) return [];
        $res = [];
        $list[] = $root;

        while ($list != null) {
            $count = count($list);
            $level = [];
            for ($i = 0; $i < $count; $i++) {
                $node = array_shift($list);
                if ($node->left != null) {
                    $list[] = $node->left;
                }
                if ($node->right != null) {
                    $list[] = $node->right;
                }

                $level[] = $node->val;
            }
            $res[] = $level;
        }
        return $res;
    }
}
