<?php

// 1155. Number of Dice Rolls With Target Sum

class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @param Integer $target
     * @return Integer
     */
    function numRollsToTarget($n, $k, $target) {
        $modulo = 100000007;

        $ways = array_fill(0, $n+1, array_fill(0, $target + 1, 0));

        $ways[0][0] = 1;

        for ($i=1; $i <= $n; $i++) { 
            
            for ($j=1; $j <= $target ; $j++) { 
                
                for ($l=1; $l <= $k; $l++) { 
                    
                    if( $j - $l >= 0 ){

                        $ways[$i][$j] = ($ways[$i][$j] + $ways[$i-1][$j - $l]) % $modulo;

                    }

                }

            }

        }  

        return $ways[$n][$target];
    }
}
