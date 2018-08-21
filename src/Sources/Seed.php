<?php

namespace MTNewton\NumberPyramid\Sources;

class Seed extends AbstractSource
{

    protected $data;

    protected $seed;

    public function __construct(int $seed = null, $size = 10)
    {
        srand($this->seed ?? time());

        $this->seed = $seed;
        $this->data = [];

        for ($r = 0; $r < $size; $r++) {
            for ($c = 0; $c <= $r; $c++) {
                $this->data[$r][$c] = rand(0, 99);
            }
        }
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getFileName(): string
    {
        $seed = is_null($this->seed) ? '' : 'seed-' . $this->seed . '-';
        return $seed . 'size-' . $this->getSize() . '.txt';
    }
}
