<?php
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $s = trim($s);
        $i = strlen($s) - 1;
        $j = $i;
        $res = "";
        while ($i >= 0) {
            while ($i >= 0 && $s[$i] != " ") $i--;
            $res .= substr($s, $i + 1, $j - $i) . " ";
            while ($i >= 0 && $s[$i] == " ") $i--;
            $j = $i;
        }
        return trim($res);
    }
}
