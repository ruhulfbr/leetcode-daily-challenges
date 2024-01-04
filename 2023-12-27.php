<?php

// 1578. Minimum Time to Make Rope Colorful


class Solution {

    /**
     * @param String $colors
     * @param Integer[] $neededTime
     * @return Integer
     */
    function minCost($colors, $neededTime) {
        // This is prety easy solution

        $time = 0;
        $prev = -1;

        for( $i=0; $i < strlen($colors); $i++ ){

            if( $prev == -1 || $colors[$prev] != $colors[$i]){
                $prev = $i;
            }
            else{

                if($neededTime[$prev] < $neededTime[$i]){

                    $time += $neededTime[$prev];
                    $prev = $i;
                }
                else{
                    $time += $neededTime[$i];
                }

            }


        }

        return $time;

    }
}
