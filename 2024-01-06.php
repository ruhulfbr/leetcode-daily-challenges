<?php
// 1235. Maximum Profit in Job Scheduling

class Solution {

    /**
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @param Integer[] $profit
     * @return Integer
     */
    
     public function jobScheduling($startTime, $endTime, $profit) {
        $n = count($startTime);
        $jobs = array();

        for ($i = 0; $i < $n; $i++) {
            $jobs[] = [$startTime[$i], $endTime[$i], $profit[$i]];
        }

        usort($jobs, function ($a, $b) {
            return $a[1] - $b[1];
        });

        $dp = array_fill(0, $n, 0);
        $dp[0] = $jobs[0][2];

        for ($i = 1; $i < $n; $i++) {
            $include = $jobs[$i][2];
            $l = $this->binarySearch($jobs, $i);
            if ($l != -1) {
                $include += $dp[$l];
            }
            $dp[$i] = max($include, $dp[$i - 1]);
        }

        return $dp[$n - 1];
    }

    private function binarySearch($jobs, $index) {
        $low = 0;
        $high = $index - 1;

        while ($low <= $high) {
            $mid = (int)($low + ($high - $low) / 2);

            if ($jobs[$mid][1] <= $jobs[$index][0]) {
                if ($jobs[$mid + 1][1] <= $jobs[$index][0]) {
                    $low = $mid + 1;
                } else {
                    return $mid;
                }
            } else {
                $high = $mid - 1;
            }
        }

        return -1;
    }
}
