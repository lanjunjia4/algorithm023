<?php
class Solution
{

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills)
    {
        $num5 = 0;
        $num10 = 0;
        for ($i = 0; $i < count($bills); $i++) {
            if ($bills[$i] == 5) {
                $num5++;
            } else if ($bills[$i] == 10) {
                if ($num5 > 0) {
                    $num5--;
                    $num10++;
                } else {
                    return false;
                }
            } else {

                if ($num5 > 0 && $num10 > 0) {
                    $num5--;
                    $num10--;
                } else if ($num5 >= 3) {
                    $num5 = $num5 - 3;
                } else {
                    return false;
                }
            }
        }
        return true;
    }
}
