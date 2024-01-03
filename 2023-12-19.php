class Solution {

    /**
     * @param Integer[][] $img
     * @return Integer[][]
     */
    function imageSmoother($img) {
        $rows = count($img);
        $cols = count($img[0]);

        $result = array_fill(0, $rows, array_fill(0, $cols, 0));

        for ($i=0; $i < $rows; $i++) { 
            
            for ($j=0; $j < $cols; $j++) { 
                
                $sum = 0;
                $count = 0;

                for ($x=max(0, $i-1); $x <= min($rows - 1, $i + 1); $x++) { 
                    
                    for ($y=max(0, $j-1); $y <= min($cols - 1, $j + 1); $y++) { 
                        
                        $sum += $img[$x][$y];
                        $count++;

                    }

                }

                $result[$i][$j] = floor($sum/$count);
            }

        }

        return $result;
    }

    // That's it solved.
}
