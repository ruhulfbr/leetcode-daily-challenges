<?php

// 1637. Widest Vertical Area Between Two Points Containing No Points

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) {
        // Its a easy problem, lets solve it
        // first sort the points

        usort($points, function($a, $b){
            return $a[0] < $b[0];
        });

        $n = count($points);
        $max_width = 0;

        for( $i=0; $i < $n -1; $i++ ){

            $width = $points[$i][0] - $points[$i + 1][0];

            if($width > $max_width){
                $max_width = $width;
            }

        }

        return $max_width;
    }
}
