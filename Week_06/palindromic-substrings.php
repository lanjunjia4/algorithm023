<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function countSubstrings($s)
    {
        $dp = array();
        $count = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            for ($j = 0; $j <= $i; $j++) {
                if ($s[$i] == $s[$j] && ($i - $j <= 1 || $dp[$j + 1][$i - 1])) {
                    $dp[$j][$i] = true;
                    $count++;
                } else {
                    $dp[$j][$i] = false;
                }
            }
        }
        return $count;
    }
}
