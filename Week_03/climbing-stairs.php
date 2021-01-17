<?php
class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n == 1 || $n == 2) return $n;

        $step1 = 1;
        $step2 = 2;
        $res = 0;
        for ($i = 3; $i <= $n; $i++) {
            $res = $step1 + $step2;
            $step1 = $step2;
            $step2 = $res;
        }
        return $res;
    }
}
