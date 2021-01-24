<?php
class Solution
{

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid)
    {
        $m = count($grid); //行
        $n = count($grid[0]); //列
        $num = 0;
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($grid[$i][$j] == 1) {
                    $num++;
                }
                $this->mark($grid, $i, $j);
            }
        }
        return $num;
    }

    function mark(&$grid, $i, $j)
    {
        if ($i < 0 || $j < 0 || $i > (count($grid) - 1) || $j > (count($grid[0]) - 1)) {
            return;
        }
        if ($grid[$i][$j] == 0) {
            return;
        }
        $grid[$i][$j] = 0;
        $this->mark($grid, $i + 1, $j);
        $this->mark($grid, $i - 1, $j);
        $this->mark($grid, $i, $j + 1);
        $this->mark($grid, $i, $j - 1);
    }
}
