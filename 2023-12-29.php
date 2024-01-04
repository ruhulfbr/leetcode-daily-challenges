<?php

// 1335. Minimum Difficulty of a Job Schedule


class Solution {

    /**
     * @param Integer[] $jobDifficulty
     * @param Integer $d
     * @return Integer
     */
    function minDifficulty($jobDifficulty, $d) {
        $n = count($jobDifficulty);
        if ($n < $d) {
            return -1;
        }
        
        $arr = array_merge([0], $jobDifficulty);
        $dp = array_fill(0, $n + 1, array_fill(0, $d + 1, PHP_INT_MAX / 2));
        $dp[0][0] = 0;
        
        for ($i = 1; $i <= $n; $i++) {
            for ($k = 1; $k <= min($i, $d); $k++) {
                $max = $arr[$i];
                for ($j = $i; $j >= $k; $j--) {
                    $max = max($max, $arr[$j]);
                    $dp[$i][$k] = min($dp[$i][$k], $dp[$j - 1][$k - 1] + $max);
                }
            }
        }

        return $dp[$n][$d];
    }
}v
