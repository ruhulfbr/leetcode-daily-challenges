<?php

// 1758. Minimum Changes To Make Alternating Binary String

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minOperations($s) {
       $n = strlen($s);

        $startZero = 0;
        for ($i=0; $i < $n; $i++) {  

            if($i%2 == 0){
                if ($s[$i] == "1"){
                    $startZero++;
                }
            }
            else{
                if ($s[$i] == "0"){
                    $startZero++;
                }
            }         
        }

        return min($startZero, $n - $startZero);
    }
}

// Solved
