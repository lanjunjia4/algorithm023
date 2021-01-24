<?php
class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        $sum = 0;

        for ($i = 1; $i < count($prices); $i++) {
            $diff = $prices[$i] - $prices[$i - 1];
            if ($diff > 0) {
                $sum += $diff;
            }
        }
        return $sum;
    }
}
