<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @param Integer $money
     * @return Integer
     */
    function buyChoco($prices, $money) {
        
        $can_buy = false;
        $rest_amt = 0;

        $n = count($prices);

        for ($i=0; $i < $n-1; $i++) { 
            
            for ($j=$i + 1; $j < $n; $j++) { 
                
                $total_price = $prices[$i] + $prices[$j];

                if($total_price <= $money){
                    $can_buy = true;

                    $amt_left = $money - $total_price;
                    if( $amt_left > $rest_amt ){
                        $rest_amt = $amt_left;
                    }

                }

            }

        }

        return $can_buy ? $rest_amt : $money;
    }
}
