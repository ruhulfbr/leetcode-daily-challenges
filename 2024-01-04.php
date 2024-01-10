<?php

// 2870. Minimum Number of Operations to Make Array Empty

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minOperations($nums) {

        $new_array = array_count_values($nums);

        $op = 0;
        foreach ($new_array as $key => $value) {
            if( $value == 1 ){
                return -1;
            }

            $op += ($value % 3 == 0) ? ($value / 3) : (intval($value / 3) - 1 + 2);
        }

        return $op;
    }
}
