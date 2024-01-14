<?php

// 1026. Maximum Difference Between Node and Ancestor


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
     * @return Integer
     */
    function maxAncestorDiff($root) {
        // Lets solve it

        return $this->helper($root, PHP_INT_MAX, PHP_INT_MIN);
    }

    function helper($root, $mini, $maxi){

        if( $root == null ){
            return 0;
        }

        $mini = min($mini, $root->val);
        $maxi = max($maxi, $root->val);

        $l = $this->helper($root->left, $mini, $maxi);
        $r = $this->helper($root->right, $mini, $maxi);

        return max($maxi - $mini, $l, $r);
    }

}
