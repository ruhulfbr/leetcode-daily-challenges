<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function numSpecial($mat) {
        // Lets DO that, it's a easy solution but tricky

        $rows = count($mat);
        $cols = count($mat[0]);

        $special = 0;

        for( $i = 0; $i < $rows; $i++ ){

            $is_speacial = false;

            for( $j = 0; $j < $cols; $j++ ){


                if( $mat[$i][$j] == 1 ){
                    $is_speacial = true;

                    for( $k = 0; $k < $cols; $k++ ){

                        if( $k != $j && $mat[$i][$k] == 1 ){
                            $is_speacial = false;
                            break;
                        }

                    }

                    for( $l = 0; $l < $rows; $l++ ){

                        if( $l != $i && $mat[$l][$j] == 1 ){
                            $is_speacial = false;
                            break;
                        }

                    }


                }
            

            }

            if( $is_speacial ){
                $special += 1;
            }

        }

        return $special;

    }
}
