<?php

class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestGoodInteger($num) {
        $maxSubstring = '';
        $length = strlen($num);

        for ($i = 0; $i < $length - 2; $i++) {
            if ($num[$i] == $num[$i + 1] && $num[$i] == $num[$i + 2]) {
                $substring = $num[$i] . $num[$i + 1] . $num[$i + 2];
                $maxSubstring = max($maxSubstring, $substring);
            }
        }

        return $maxSubstring;
    }
}
