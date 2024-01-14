<?php

// 1704. Determine if String Halves Are Alike

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $n = strlen($s)/2;
        $string1 = substr($s, 0, $n);
        $string2 = substr($s, $n);

        $count1 = 0;
        $count2 = 0;

        for ($i = 0; $i < $n; $i++) {

            if (in_array($string1[$i], $vowels)) {
                $count1++;
            }

            if (in_array($string2[$i], $vowels)) {
                $count2++;
            }
        }

        return $count1 == $count2;
    }
}
