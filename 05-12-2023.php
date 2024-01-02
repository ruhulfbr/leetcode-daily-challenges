<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOfMatches($n) {
    	$total_match = 0;
    	while ($n > 1) {   		
    		if($n % 2 == 0){
    			$total_match += $n/2;
    			$n = $n/2;
    		}
    		else{
    			$total_match += ($n - 1)/2;
    			$n = 1 + ($n-1)/2;
    		}
    	}

    	return $total_match;
    }
}
