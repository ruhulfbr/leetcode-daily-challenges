<?php

// 2385. Amount of Time for Binary Tree to Be Infected

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
     * @param Integer $start
     * @return Integer
     */
    
    public $g = [];

    public function amountOfTime($root, $start) {
        $this->dfs($root);
        return $this->dfsHelper($start, -1);
    }

    public function dfsHelper($i, $fa) {
        $ans = 0;
        foreach ($this->g[$i] as $j) {
            if ($j != $fa) {
                $ans = max($ans, 1 + $this->dfsHelper($j, $i));
            }
        }
        return $ans;
    }

    public function dfs($root) {
        if (!$root) {
            return;
        }

        if ($root->left) {
            $this->g[$root->val][] = $root->left->val;
            $this->g[$root->left->val][] = $root->val;
        }

        if ($root->right) {
            $this->g[$root->val][] = $root->right->val;
            $this->g[$root->right->val][] = $root->val;
        }

        $this->dfs($root->left);
        $this->dfs($root->right);
    }
}
