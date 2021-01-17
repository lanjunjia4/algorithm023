<?php
class Solution
{

    public $res;
    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k)
    {
        $this->cercur(0, $k, $n, []);
        return $this->res;
    }

    function cercur($index, $k, $n, $arr)
    {
        if (count($arr) == $k) {
            $this->res[] = $arr;
            return;
        }
        //for($i=$index;$i<$n;$i++){
        for ($i = $index; $i < $n - ($k - count($arr)) + 1; $i++) {
            $arr[] = $i + 1;
            $this->cercur(++$index, $k, $n, $arr);
            $arr = array_slice($arr, 0, count($arr) - 1);
        }
        return;
    }
}
