<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        $ans = $nums[0];
        $sum = 0;
        foreach ($nums as $num) {
            if ($sum > 0) {
                $sum += $num;
            } else {
                $sum = $num;
            }
            $ans = $this->max($ans, $sum);
        }
        return $ans;
    }
    function max($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }
}
