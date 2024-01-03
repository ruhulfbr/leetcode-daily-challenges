<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        // It's a easy solution, in just line, lets see

        rsort($nums);
        return ($nums[0] -1) * ($nums[1] -1);

        // That's it. Thank you

    }
}
