<?php

// 1207. Unique Number of Occurrences

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        // This is very easy problem.
        // Lets solve it

        $occ = array_count_values($arr);
        return count($occ) == count(array_unique($occ));
    }
}
