<?php

// 455. Assign Cookies
class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);

        $ch = count($g);
        $ck = count($s);
        $j   = 0;
        $max = 0;

        for ($i=0; $i < $ch; $i++) { 
            if( $j == $ck ){
                break;
            }

            for ($j; $j < $ck; $j++) {             
                if($s[$j] >= $g[$i]){
                    $max++;
                    $j = $j + 1;
                    break;
                }
            }
        }

        return $max;
    }
}
