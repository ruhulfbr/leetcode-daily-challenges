<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    function onesMinusZeros($grid) {
        $rows = count($grid);
        $cols = count($grid[0]);

        $new_grid = [];

        $row_sums = array_map('array_sum', $grid);
        $row_ones = $row_sums;
        $row_zeros = array_map(function ($sum) use ($cols) {
            return $cols - $sum;
        }, $row_sums);

        $col_ones = array_fill(0, $cols, 0);
        $col_zeros = array_fill(0, $cols, 0);

        for ($r = 0; $r < $rows; $r++) {
            for ($c = 0; $c < $cols; $c++) {
                if ($grid[$r][$c] == 0) {
                    $col_zeros[$c]++;
                } elseif ($grid[$r][$c] == 1) {
                    $col_ones[$c]++;
                }
            }
        }

        // Calculate the new grid
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $new_grid[$i][$j] = $row_ones[$i] + $col_ones[$j] - $row_zeros[$i] - $col_zeros[$j];
            }
        }

        return $new_grid;
    }
}
