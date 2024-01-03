<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProductDifference($nums) {
        $min1 = PHP_INT_MAX;
        $min2 = PHP_INT_MAX;
        $max1 = PHP_INT_MIN;
        $max2 = PHP_INT_MIN;

        // Iterate through the array to find the extreme values
        foreach ($nums as $num) {
            if ($num <= $min1) {
                $min2 = $min1;
                $min1 = $num;
            } elseif ($num <= $min2) {
                $min2 = $num;
            }

            if ($num >= $max1) {
                $max2 = $max1;
                $max1 = $num;
            } elseif ($num >= $max2) {
                $max2 = $num;
            }
        }

        // Calculate the product difference
        $productDifference = ($max1 * $max2) - ($min1 * $min2);

        return $productDifference;
    }
}
