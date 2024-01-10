<?php

// 2125. Number of Laser Beams in a Bank

class Solution {

    /**
     * @param String[] $bank
     * @return Integer
     */
    function numberOfBeams($bank) {
        $n = count($bank);

        if($n < 2){
            return 0;
        }

        $beems = 0;
        $prev = 0;

        for ($i = 1; $i < $n; $i++) { 

            if( strpos($bank[$i], "1") !== false ){
                $beems += (substr_count($bank[$prev], '1') * substr_count($bank[$i], '1'));
                $prev = $i;
            }
        }

        return $beems;
    }
}
