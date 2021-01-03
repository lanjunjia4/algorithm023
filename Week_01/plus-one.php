<?php
class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        $len = count($digits);
        for ($i = $len - 1; $i >= 0; $i--) {
            $digits[$i] = $digits[$i] + 1;
            if ($digits[$i] == 10) {
                $digits[$i] = 0;
            } else {
                return $digits;
            }
        }
        for ($i = 0; $i <= $len; $i++) {
            $digits[$i] = 0;
        }
        $digits[0] = 1;
        return $digits;
    }
}
