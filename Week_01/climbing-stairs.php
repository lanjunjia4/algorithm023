<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n <= 2) {
            return $n;
        }
        $prevPrev = 1;
        $prev = 2;
        $cur = 0;
        for ($i = 3; $i <= $n; $i++) {
            $cur = $prev + $prevPrev;
            $prevPrev = $prev;
            $prev = $cur;
        }
        return $cur;
    }
}
