<?php

namespace MTNewton\NumberPyramid;

use MTNewton\NumberPyramid\Factories\SolverFactory;
use MTNewton\NumberPyramid\Factories\SourceFactory;
use MTNewton\NumberPyramid\Solvers\AbstractSolver;
use MTNewton\NumberPyramid\Sources\AbstractSource;

/**
 * @method static static fromFile($file)
 * @method static static fromSeed($seed = null, $size = 10);
 * @method int solveMin();
 * @method int solveMax();
 */
class NumberPyramid
{
    protected $source;

    public function __construct(AbstractSource $source)
    {
        $this->source = $source;
    }

    public function generate(): string
    {
        return $this->source->generate();
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'solve') === 0) {
            return SolverFactory::get(substr($name, 5), [$this->source->getData()])->solve();
        }
        throw new \Exception("Unknown method: {$name}");
    }

    public static function __callStatic($name, $arguments): NumberPyramid
    {
        if (strpos($name, 'from') === 0) {
            return new static(SourceFactory::get(substr($name, 4), $arguments));
        }
        throw new \Exception("Unknown static method: {$name}");
    }
}
