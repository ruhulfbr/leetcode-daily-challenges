<?php

// 446. Arithmetic Slices II - Subsequence

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numberOfArithmeticSlices($nums) {
        $ans = 0;
        $n = count($nums);
        $f = array_fill(0, $n, array());

        for ($i = 0; $i < $n; ++$i) {
            $f[$i] = array();
        }

        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $i; ++$j) {
                $d = 1 * $nums[$i] - $nums[$j];
                $cnt = isset($f[$j][$d]) ? $f[$j][$d] : 0;
                $ans += $cnt;
                $f[$i][$d] = isset($f[$i][$d]) ? $f[$i][$d] + $cnt + 1 : $cnt + 1;
            }
        }

        return $ans;
    }
}
