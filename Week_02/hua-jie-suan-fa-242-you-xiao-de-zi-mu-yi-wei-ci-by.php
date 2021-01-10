<?php
class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        $len = strlen($s);
        $len2 = strlen($t);
        if ($len2 != $len) {
            return false;
        }
        $hash = [];
        for ($i = 0; $i < $len; $i++) {
            if (isset($hash[$s[$i]])) {
                $hash[$s[$i]]++;
            } else {
                $hash[$s[$i]] = 1;
            }
        }
        //var_dump($hash);

        for ($i = 0; $i < $len2; $i++) {
            if (isset($hash[$t[$i]])) {
                $hash[$t[$i]]--;
                if ($hash[$t[$i]] == 0) {
                    unset($hash[$t[$i]]);
                }
            } else {
                return false;
            }
        }
        // var_dump($hash);
        if (count($hash) == 0 || empty($hash)) {
            return true;
        }
    }
}
