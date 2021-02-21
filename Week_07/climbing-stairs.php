<?php
class Solution
{

    public $hash = [];
    /**
     * @param Int $n
     * @return Int
     */
    function climbStairs($n)
    {
        if ($n <= 2) {
            return $n;
        }

        if (isset($this->hash[$n])) {
            return $this->hash[$n];
        } else {
            $res = $this->climbStairs($n - 1) + $this->climbStairs($n - 2);
            $this->hash[$n] = $res;
            return $res;
        }
    }
    function climbStairs2($n)
    {
        if ($n <= 2) {
            return $n;
        }

        $s1 = 1;
        $s2 = 2;
        $cur = 0;
        for ($i = 3; $i <= $n; $i++) {
            $cur = $s1 + $s2;
            $s1 = $s2;
            $s2 = $cur;
        }
        return $cur;
    }
}
