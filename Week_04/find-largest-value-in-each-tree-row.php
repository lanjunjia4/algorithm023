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
     * DFS
     * @param TreeNode $root
     * @return Integer[]
     */
    function largestValues($root)
    {
        $arr = [];
        $this->cur($root, 0, $arr);
        return $arr;
    }

    function cur($node, $level, &$arr)
    {
        if (isset($arr[$level])) {
            if ($node->val > $arr[$level]) {
                $arr[$level] = $node->val;
            }
        } else {
            $arr[$level] = $node->val;
        }
        if ($node->left != null) {
            $this->cur($node->left, $level + 1, $arr);
        }
        if ($node->right != null) {
            $this->cur($node->right, $level + 1, $arr);
        }
    }

    public $res = [];
    /**
     * BFS
     * @param TreeNode $root
     * @return Integer[]
     */
    function largestValues2($root)
    {
        $list[] = $root;

        while ($list != null) {
            $count = count($list);
            $max = $list[$count - 1]->val;
            for ($i = 0; $i < $count; $i++) {
                $node = array_shift($list);
                if ($max < $node->val) {
                    $max = $node->val;
                }
                if ($node->left != null) {
                    $list[] = $node->left;
                }
                if ($node->right != null) {
                    $list[] = $node->right;
                }
            }
            $this->res[] = $max;
        }
        return $this->res;
    }
}
