<?php

// 70. Climbing Stairs

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    
    function climbStairs($n) {
        if( $n < 3 ){
            return $n;
        }

        $a = 1;
        $b = 2;

        for( $i=3; $i <= $n; $i++ ){

            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $b;
    }
}
