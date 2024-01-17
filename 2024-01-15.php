<?php

// 2225. Find Players With Zero or One Losses

class Solution {

    /**
     * @param Integer[][] $matches
     * @return Integer[][]
     */
    
    function findWinners($matches) {
        // lets solve it

        $ans = [[], []];
        $map = [];


        foreach( $matches as $it ){

            $map[$it[0]] = 0;
            $map[$it[1]] = 0;
        }

        foreach( $matches as $it ){

            $map[$it[1]] += 1;
        }

        foreach( $map as $key => $value ){

            if( $value == 0 ){
                $ans[0][] = $key;
            }

            if( $value == 1 ){
                $ans[1][] = $key;
            }
        }

        sort($ans[0]);
        sort($ans[1]);

        return $ans;
    }
}
