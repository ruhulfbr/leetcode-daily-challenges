<?php

// 872. Leaf-Similar Trees

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

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2) {
        // Lets solve it

        $l1 = $this->dfs($root1);
        $l2 = $this->dfs($root2);

        return $l1 == $l2;

    }

    function dfs($root){
        if( empty($root) ){
            return [];
        }

       $ans = $this->dfs($root->left);
       $ans = array_merge($ans, $this->dfs($root->right));

       if( empty($ans) ){
           $ans[] = $root->val;
       }

       return $ans;
    }
}
