<?php

// 1496. Path Crossing

class Solution {

    /**
     * @param String $path
     * @return Boolean
     */
    function isPathCrossing($path) {
        $x = 0;
        $y = 0;
        $visited = [];
        $visited[] = [$x, $y];

        for( $i=0; $i < strlen($path); $i++ ){

            $move = $path[$i];

            switch($move){
                case "N":
                    $y += 1;
                    break;
                case "S":
                    $y -= 1;
                    break;
                case "E":
                    $x += 1;
                    break;
                case "W":
                    $x -= 1;
                    break;
            }

            if( in_array([$x, $y], $visited) ){
                return true;
            }

            $visited[] = [$x, $y];

        }

        return false;

    }
}
