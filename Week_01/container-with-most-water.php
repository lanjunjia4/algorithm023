<?php
class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $l = 0;
        $r = count($height) - 1;
        $max = 0;
        while ($l < $r) {
            $h = $height[$l] > $height[$r] ? $height[$r--] : $height[$l++];
            $area = $h * ($r - $l + 1);
            if ($max < $area) {
                $max = $area;
            }
        }
        return $max;
    }
}
