<?php

// 1347. Minimum Number of Steps to Make Two Strings Anagram

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Integer
     */
    function minSteps($s, $t) {
        if ($s == $t) {
            return 0;
        }

        $tChars = array_count_values(str_split($t));

        $step = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($tChars[$s[$i]]) && $tChars[$s[$i]] > 0) {
                $tChars[$s[$i]]--;
            } else {
                $step++;
            }
        }

        return $step;
    }
}
