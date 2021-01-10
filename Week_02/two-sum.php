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
        $hash = [];
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            if (isset($hash[$nums[$i]])) {
                return [$hash[$nums[$i]], $i];
            } else {
                $hash[$target - $nums[$i]] = $i;
            }
        }
        return null;
    }
}
