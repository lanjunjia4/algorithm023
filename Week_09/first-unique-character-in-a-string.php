<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s)
    {
        $hash = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($hash[$s[$i]])) {
                $hash[$s[$i]]++;
            } else {
                $hash[$s[$i]] = 1;
            }
        }
        $k = "";
        foreach ($hash as $key => $item) {
            if ($item == 1) {
                $k = $key;
                break;
            }
        }
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == $k) {
                return $i;
            }
        }
        return -1;
    }
}
