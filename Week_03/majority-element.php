<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {
        $key = 0;
        $num = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($num == 0) {
                $key = $nums[$i];
                $num++;
            } else {
                if ($key == $nums[$i]) {
                    $num++;
                } else {
                    $num--;
                }
            }
        }
        return $key;
    }
}
