<?php

// 300. Longest Increasing Subsequence

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums) {
        // Its a prety hard problem

        // lets solve it

        if( empty($nums) ){
            return 0;
        }

        $n = count($nums);

        $dp = array_fill(0, $n, 1);

        for( $i = 1; $i < $n; $i++ ){
            for( $j = 0; $j < $i; $j++ ){
                
                if($nums[$j] < $nums[$i]){
                    $dp[$i] = max($dp[$i], $dp[$j]+1);  
                }

            }
        }

        return max($dp);

    }
}
