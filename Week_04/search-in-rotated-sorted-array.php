<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $start = 0;
        $end = count($nums) - 1;
        //$this->qsort($nums,$start,$end);
        // var_dump($nums);
        while ($start <= $end) {
            $mid = $start + (($end - $start) >> 1);
            if ($target == $nums[$mid]) {
                return $mid;
            }
            if ($nums[$start] <= $nums[$mid]) {
                if ($target < $nums[$mid] && $target >= $nums[$start]) {
                    $end = $mid - 1;
                } else {
                    $start = $mid + 1;
                }
            } else {
                if ($target > $nums[$mid] && $target <= $nums[$end]) {
                    $start = $mid + 1;
                } else {
                    $end = $mid - 1;
                }
            }
        }
        return -1;
    }

    function qsort(&$arr, $l, $r)
    {
        if ($l > $r) {
            return;
        }
        $key = $this->getKey($arr, $l, $r);
        $this->qsort($arr, $l, $key - 1);
        $this->qsort($arr, $key + 1, $r);
    }

    function getKey(&$arr, $l, $r)
    {
        $index = $l;
        for ($i = $l; $i < $r; $i++) {
            if ($arr[$i] < $arr[$r]) {
                $this->swap($arr, $index, $i);
                $index++;
            }
        }
        $this->swap($arr, $index, $r);
        return $index;
    }

    function swap(&$arr, $a, $b)
    {
        $temp = $arr[$b];
        $arr[$b] = $arr[$a];
        $arr[$a] = $temp;
    }
}
