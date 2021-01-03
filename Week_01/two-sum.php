<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        if (is_null($nums) || count($nums) < 2) {
            return null;
        }
        $hash = [];
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            $num = $nums[$i];
            if (isset($hash[$num])) {
                return [$hash[$num], $i];
            } else {
                $hash[$target - $num] = $i;
            }
        }
        return null;
    }
}
