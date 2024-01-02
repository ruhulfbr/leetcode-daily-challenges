<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function totalMoney($n) {
        $monday_amt = 1;
        $daily_save = 0;
        $total_amt  = 0;

        for( $day = 1; $day <= $n; $day++ ){
            $total_amt += $monday_amt + $daily_save;
            
            if($day % 7 == 0){
                $monday_amt += 1;
                $daily_save = 0;
            }
            else{
                $daily_save++;
            }
        }

        return $total_amt;
    }
}
