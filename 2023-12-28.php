<?php

// 1531. String Compression II

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    public function getLengthOfOptimalCompression($s, $k) {
        $n = strlen($s);
        $m = $k;  // K assign into another variable

        $dp = array_fill(0, 110, array_fill(0, 110, 0));

        for ($i = 1; $i <= $n; ++$i) {
            for ($j = 0; $j <= $i && $j <= $m; ++$j) {
                $need_remove = 0;
                $group_count = 0;
                $dp[$i][$j] = PHP_INT_MAX;

                if ($j) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                }

                for ($k = $i; $k >= 1; --$k) { // this K is different
                    if ($s[$k - 1] != $s[$i - 1]) {
                        $need_remove += 1;
                    } else {
                        $group_count += 1;
                    }

                    if ($need_remove > $j) {
                        break;
                    }

                    // these are different cases

                    if ($group_count == 1) {
                        $dp[$i][$j] = min($dp[$i][$j], $dp[$k - 1][$j - $need_remove] + 1);
                    } elseif ($group_count < 10) {
                        $dp[$i][$j] = min($dp[$i][$j], $dp[$k - 1][$j - $need_remove] + 2);
                    } elseif ($group_count < 100) {
                        $dp[$i][$j] = min($dp[$i][$j], $dp[$k - 1][$j - $need_remove] + 3);
                    } else {
                        $dp[$i][$j] = min($dp[$i][$j], $dp[$k - 1][$j - $need_remove] + 4);
                    }
                }
            }
        }

        return $dp[$n][$m];
    }
}v
