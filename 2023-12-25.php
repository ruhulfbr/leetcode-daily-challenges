<?php

// 91. Decode Ways

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s) {
        $n = strlen($s);

        // Handle edge cases
        if ($n == 0 || $s[0] == '0') {
            return 0;
        }

        $dp = array_fill(0, $n + 1, 0);
        $dp[0] = 1;
        $dp[1] = 1;

        for ($i = 2; $i <= $n; $i++) {
            $oneDigit = intval(substr($s, $i - 1, 1));
            $twoDigits = intval(substr($s, $i - 2, 2));

            if ($oneDigit >= 1) {
                $dp[$i] += $dp[$i - 1];
            }

            if ($twoDigits >= 10 && $twoDigits <= 26) {
                $dp[$i] += $dp[$i - 2];
            }
        }

        return $dp[$n];
    }
}
