<?php
class Solution
{

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid)
    {
        $h = count($grid);
        $w = count($grid[0]);
        $num = 0;

        for ($i = 0; $i < $h; $i++) {
            for ($j = 0; $j < $w; $j++) {
                if ($grid[$i][$j] == 1) {
                    $num++;
                    $this->mark($grid, $i, $j);
                }
            }
        }
        return $num;
    }

    function mark(&$grid, $i, $j)
    {
        if ($i < 0 || $j < 0 || $j >= count($grid[0]) || $i >= count($grid)) {
            return;
        }
        if ($grid[$i][$j] == 0) {
            return;
        }
        $grid[$i][$j] = 0;
        $this->mark($grid, $i - 1, $j);
        $this->mark($grid, $i, $j - 1);
        $this->mark($grid, $i + 1, $j);
        $this->mark($grid, $i, $j + 1);
    }
}
