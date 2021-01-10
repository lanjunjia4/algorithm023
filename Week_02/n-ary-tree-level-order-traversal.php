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
     * @return integer[][]
     */
    function levelOrder($root)
    {
        if (empty($root)) {
            return [];
        }
        $res = [];
        $q = [];
        $q[] = $root;
        while (count($q) != 0) {
            $len = count($q);
            $level = [];
            for ($i = $len; $i > 0; $i--) {
                $node = array_shift($q);
                $level[] = $node->val;
                $childrenLen = count($node->children);
                for ($j = 0; $j < $childrenLen; $j++) {
                    $q[] = $node->children[$j];
                }
            }
            $res[] = $level;
        }
        return $res;
    }
}
