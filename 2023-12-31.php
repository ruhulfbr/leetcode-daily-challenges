<?php

// 1624. Largest Substring Between Two Equal Characters


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
     function maxLengthBetweenEqualCharacters($s) {
        // Lets solve it, its a very easy solution

        $n = strlen($s);

        $dups = [];
        $chars = [];

        for ($i=0; $i < $n; $i++) { 
            $char = $s[$i];

            if( $pos = strpos($s, $char, $i + 1) ){

                // one more things
                if( isset($dups[$char]) ){

                    $dups[$char][1] = $pos;
                    $chars[] = ($pos - $dups[$char][0]) - 1;

                }
                else{
                    $dups[$char] = [$i, $pos];
                    $chars[] = ($pos - $i) - 1;
                }
            }

        }

        if( empty($dups) ){
            return -1;
        }

        return max($chars);
    }
}
