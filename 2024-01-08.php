<?php

// 938. Range Sum of BST

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
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */

     public $ans;

    function rangeSumBST($root, $L, $R) {
        // Lets solve it
        $this->ans = 0;
        $this->inorder($root, $L, $R);
        return $this->ans;
    }

    function inorder($root, $L, $R){

        if($root === null){
            return;
        }

        $this->inorder($root->left, $L, $R);

        if($root->val >= $L && $root->val <= $R){
            $this->ans += $root->val;
        }

        $this->inorder($root->right, $L, $R);
    }

}
