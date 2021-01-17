<?php
class Solution
{

    public $res;
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */

    //方法一：回溯
    function subsets($nums)
    {
        $this->cercur(-1, count($nums), $nums, []);
        return $this->res;
    }
    function cercur($index, $len, $nums, $arr)
    {
        //1.
        if ($index == $len - 1) {
            $this->res[] = $arr;
            return;
        }
        //2.
        //3.
        $index++;
        $this->cercur($index, $len, $nums, $arr);
        $arr[] = $nums[$index];
        $this->cercur($index, $len, $nums, $arr);
        //4.
        return;
    }

    //方法二：迭代
    function subsets2($nums)
    {
        $arr = [[]];
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            $temp = $arr;
            foreach ($temp as $item) {
                $item[] = $nums[$i];
                $arr[] = $item;
            }
        }
        return $arr;
    }
}
