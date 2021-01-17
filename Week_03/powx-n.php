<?php
class Solution
{

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n)
    {
        if ($n == 0) {
            return 1;
        }

        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }

        return $this->cercur($x, $n);
    }

    function cercur($x, $n)
    {
        if ($n == 0) {
            return 1;
        }

        $y = $this->cercur($x, $n / 2);
        return $n % 2 == 0 ? $y * $y : $y * $y * $x;
    }
}
