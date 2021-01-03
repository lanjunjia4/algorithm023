<?php
class Solution
{

    /**
     * 解法1:类似快排，双指针
     * 解法2:先存非0，在补齐0
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums)
    {
        $len = count($nums);
        $i = 0;
        $j = 0;
        while ($j < $len) {
            if ($nums[$j] != 0) {
                $temp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j] = $temp;
                $i++;
            }
            $j++;
        }
    }
    function moveZeroes2(&$nums)
    {
        $len = count($nums);
        $j = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($nums[$i] != 0) {
                $nums[$j++] = $nums[$i];
            }
        }
        for ($i = $j; $i < $len; $i++) {
            $nums[$i] = 0;
        }
    }
}
