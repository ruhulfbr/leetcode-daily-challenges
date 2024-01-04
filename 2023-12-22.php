<?php

// 1422. Maximum Score After Splitting a String

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxScore($s) {
        $maxScore = 0;
        $zerosInLeft = 0;
        $onesInRight = substr_count($s, '1');

        for ($i = 0; $i < strlen($s) - 1; $i++) {
            if ($s[$i] === '0') {
                $zerosInLeft++;
            } else {
                $onesInRight--;
            }

            $score = $zerosInLeft + $onesInRight;

            if ($score > $maxScore) {
                $maxScore = $score;
            }
        }

        return $maxScore;
    }
}
