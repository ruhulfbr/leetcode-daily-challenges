<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function largestOddNumber($n) {
      $length = strlen($n);

        for ($i = $length - 1; $i >= 0; $i--) {
            if ($n[$i] % 2 !== 0) {
                return substr($n, 0, $i + 1);
            }
        }

        return "";
    }
}
