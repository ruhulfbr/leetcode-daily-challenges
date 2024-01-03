<?php

class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {
        $outgoingCities = [];

        foreach ($paths as $path) {
            $outgoingCities[] = $path[0];
        }

        foreach ($paths as $path) {
            $toCity = $path[1];
            if (!in_array($toCity, $outgoingCities)) {
                return $toCity;
            }
        }

        return null;
    }
}
