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
class Solution {

    public $num;
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isValidBST($root) {
        return $this->cercur($root);
    }

    function cercur($node){
        if($node==null){
            return true;
        }
        
        if(!$this->cercur($node->left)){
            return false;
        }

        if(!is_null($this->num)&&$node->val<=$this->num){
            return false;
        }else{
            $this->num=$node->val;
        }

        if(!$this->cercur($node->right)){
            return false;
        }
        
        return true;
    }   
}