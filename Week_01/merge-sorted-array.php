<?php
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $i = 0;
        $j = 0;
        $a = [];
        if ($n == 0) return;
        while ($i < $m && $j < $n) {
            if ($nums1[$i] < $nums2[$j]) {
                $a[] = $nums1[$i++];
            } else {
                $a[] = $nums2[$j++];
            }
        }
        if ($i < $m) {
            for ($i = $i; $i < $m; $i++) {
                $a[] = $nums1[$i];
            }
        }
        if ($j < $n) {
            for ($i = $j; $i < $n; $i++) {
                $a[] = $nums2[$i];
            }
        }
        $nums1 = $a;
    }
}
