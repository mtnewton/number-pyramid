<?php

namespace MTNewton\NumberPyramid\Solvers;

abstract class AbstractSolver
{
    protected $data;

    protected $score;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->score = [];
    }

    abstract public function solve(): int;

    protected function previousScore($row, $col, $callback): int
    {
        $compare = array_filter([
            $this->score[$row-1][$col-1] ?? null,
            $this->score[$row-1][$col] ?? null
        ]);

        return $compare ? $callback($compare) : 0;
    }
}
