<?php

// 1897. Redistribute Characters to Make All Strings Equal


class Solution {

    /**
     * @param String[] $words
     * @return Boolean
     */
    function makeEqual($words) {
        $srting = str_split(implode("", $words));
        $uniqueCounts = array_count_values($srting);

        $wordCount = count($words);
        foreach ($uniqueCounts as $count) {
            if ($count % $wordCount !== 0) {
                return false;
            }
        }

        return true;
    }
}
