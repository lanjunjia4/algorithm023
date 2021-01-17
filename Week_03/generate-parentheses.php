<?php
class Solution
{

    public $arr;
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n)
    {
        $this->generate(0, 0, $n, "");
        return $this->arr;
    }

    function generate($l, $r, $n, $str)
    {
        if ($l == $n && $r == $n) {
            $this->arr[] = $str;
            return;
        }

        if ($l < $n) {
            $this->generate($l + 1, $r, $n, $str . "(");
        }
        if ($r < $l) {
            $this->generate($l, $r + 1, $n, $str . ")");
        }

        return;
    }
}
