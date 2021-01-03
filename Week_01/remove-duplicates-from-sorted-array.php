<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        if (is_null($nums) || count($nums) == 0) {
            return 0;
        }
        $i = 0;
        $j = 1;
        while ($j < count($nums)) {
            if ($nums[$i] != $nums[$j]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
            $j++;
        }
        return ++$i;
    }
}
