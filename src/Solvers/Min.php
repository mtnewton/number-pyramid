<?php

namespace MTNewton\NumberPyramid\Solvers;

class Min extends AbstractSolver
{
    public function solve(): int
    {
        for ($r = 0; $r<count($this->data); $r++) {
            for ($c = 0; $c<=$r; $c++) {
                $this->score[$r][$c] = $this->data[$r][$c] + $this->previousScore($r, $c, 'min');
            }
        }
        return min(...$this->score[count($this->data)-1]);
    }
}
