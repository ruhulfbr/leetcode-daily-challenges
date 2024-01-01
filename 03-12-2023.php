<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function minTimeToVisitAllPoints($points) {
        $totalTime = 0;

        for ($i = 1; $i < count($points); $i++) {
            $x1 = $points[$i - 1][0];
            $y1 = $points[$i - 1][1];
            $x2 = $points[$i][0];
            $y2 = $points[$i][1];

            // Calculate horizontal and vertical distances
            $horizontalDistance = abs($x2 - $x1);
            $verticalDistance = abs($y2 - $y1);

            // Calculate diagonal distance
            $diagonalDistance = min($horizontalDistance, $verticalDistance);

            // Calculate remaining horizontal and vertical distance after diagonal movement
            $remainingHorizontal = $horizontalDistance - $diagonalDistance;
            $remainingVertical = $verticalDistance - $diagonalDistance;

            // Calculate total time for the current segment
            $segmentTime = $diagonalDistance + $remainingHorizontal + $remainingVertical;

            // Add the time for the current segment to the total time
            $totalTime += $segmentTime;
        }

        return $totalTime;
    }
}
