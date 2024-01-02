<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[][]
     */
    function transpose($matrix) {
        $t_m = [];

        foreach ($matrix as $i => $row) {
            foreach ($row as $j => $value) {
                $t_m[$j][$i] = $value;
            }
        }

        return $t_m;
    }
}
