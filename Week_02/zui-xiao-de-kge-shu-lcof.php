<?php
class Solution
{

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer[]
     */
    function getLeastNumbers($arr, $k)
    {
        $this->sort($arr, 0, count($arr) - 1, $k);
        $res = [];
        for ($i = 0; $i < $k; $i++) {
            $res[] = $arr[$i];
        }
        return $res;
    }

    function sort(&$arr, $l, $r, $k)
    {
        if ($l > $r) {
            return;
        }

        $index = $this->getKey($arr, $l, $r);
        if ($index == $k) {

            return;
        }
        $this->sort($arr, $l, $index - 1, $k);
        $this->sort($arr, $index + 1, $r, $k);
    }

    function getKey(&$arr, $l, $r)
    {
        if ($l > $r) {
            return;
        }
        $index = $l;
        $len = count($arr);
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
        $temp = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $temp;
    }
}
