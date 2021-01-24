<?php
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target)
    {
        $h = 0;
        for ($i = 1; $i < count($matrix); $i++) {
            $h = $i;
            if ($matrix[$i][0] >= $target) {
                $h = $i - 1;
                if ($target == $matrix[$i][0]) {
                    return true;
                }
                break;
            }
        }

        return $this->search($matrix[$h], $target);
    }

    function search($arr, $target)
    {
        $lo = 0;
        $hi = count($arr) - 1;
        while ($lo <= $hi) {
            $mid = $lo + (($hi - $lo) >> 1);
            if ($arr[$mid] == $target) {
                return true;
            }
            if ($target < $arr[$mid]) {
                $hi = $mid - 1;
            } else {
                $lo = $mid + 1;
            }
        }
        return false;
    }
}
