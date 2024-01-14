<?php

// 1657. Determine if Two Strings Are Close

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        $data1 = $this->getData($word1);
        $data2 = $this->getData($word2);

        sort($data1['ltrs']);
        sort($data2['ltrs']);
        sort($data1['times']);
        sort($data2['times']);

        return $data1['ltrs'] === $data2['ltrs'] && $data1['times'] === $data2['times'];
    }

    function getData($word) {
        $map = array();

        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            if (!isset($map[$char])) {
                $map[$char] = 0;
            }
            $map[$char]++;
        }

        return array(
            'ltrs' => array_keys($map),
            'times' => array_values($map)
        );
    }


}
