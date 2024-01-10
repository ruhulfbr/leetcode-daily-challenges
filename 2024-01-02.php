<?php

//2610. Convert an Array Into a 2D Array With Conditions


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function findMatrix($nums) {
        $array = [];

        while (count($nums) > 0) {
            
            $new_arr = [];
            foreach ($nums as $key => $value) {
                
                if( !in_array($value, $new_arr) ){
                    $new_arr[] = $value;
                    unset($nums[$key]);
                }        
            }

            $array[] = $new_arr;
        }

        return $array;
    }
}
