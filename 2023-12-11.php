<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr) {
        $n = count($arr);
        $threshold = floor($n * 0.25) + 1;
        $count = 1;

        foreach ($arr as $i => $element) {
            if ($i > 0 && $element === $arr[$i - 1]) {
                $count++;
                if ($count >= $threshold) {
                    return $element;
                }
            } else {
                $count = 1;
            }
        }

        return $arr[0];
    }
}
