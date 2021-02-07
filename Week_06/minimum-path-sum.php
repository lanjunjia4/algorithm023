<?php
class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid)
    {
        $h = count($grid);
        $w = count($grid[0]);
        for ($i = 0; $i < $h; $i++) {
            for ($j = 0; $j < $w; $j++) {
                if ($i == 0 && $j == 0) {
                    continue;
                }
                if ($i == 0) {
                    $grid[$i][$j] = $grid[$i][$j - 1] + $grid[$i][$j];
                } else if ($j == 0) {
                    $grid[$i][$j] = $grid[$i - 1][$j] + $grid[$i][$j];
                } else {
                    $grid[$i][$j] = $this->min($grid[$i - 1][$j], $grid[$i][$j - 1]) + $grid[$i][$j];
                }
            }
        }

        return $grid[$h - 1][$w - 1];
    }

    function min($a, $b)
    {
        if ($a > $b) {
            return $b;
        } else {
            return $a;
        }
    }
}
