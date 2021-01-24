<?php
class Solution
{

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s)
    {
        $countG = count($g);
        $countS = count($s);
        $this->qsort($g, 0, $countG - 1);
        $this->qsort($s, 0, $countS - 1);
        $child = 0;
        $cookie = 0;
        while ($child < $countG && $cookie < $countS) {
            if ($g[$child] <= $s[$cookie]) {
                $child++;
            }
            $cookie++;
        }
        return $child;
    }

    //快排
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
                $this->swap($arr, $i, $index);
                $index++;
            }
        }
        $this->swap($arr, $r, $index);
        return $index;
    }

    function swap(&$arr, $a, $b)
    {
        $temp = $arr[$b];
        $arr[$b] = $arr[$a];
        $arr[$a] = $temp;
    }
}
