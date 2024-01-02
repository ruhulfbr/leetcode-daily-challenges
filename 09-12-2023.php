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

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $result = [];
        $this->inorderHelper($root, $result);
        return $result;
    }

    function inorderHelper($node, &$result) {
        if ($node !== null) {
            $this->inorderHelper($node->left, $result);
            $result[] = $node->val;
            $this->inorderHelper($node->right, $result);
        }
    }
}
