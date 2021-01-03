<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {
        $len = count($nums);
        $start = 0;
        for ($i = 0; $start < $len; $i++) {
            $cur = $i;
            $temp = $nums[$i];
            do {
                $start++;
                $next = ($cur + $k) % $len;
                $nextValue = $nums[$next];
                $nums[$next] = $temp;
                $temp = $nextValue;
                $cur = $next;
            } while ($cur != $i);
        }
    }
}
