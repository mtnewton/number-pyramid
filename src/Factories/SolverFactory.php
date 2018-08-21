<?php

namespace MTNewton\NumberPyramid\Factories;

use MTNewton\NumberPyramid\Solvers\AbstractSolver;

class SolverFactory
{
    static $sourceNamespace = 'MTNewton\\NumberPyramid\\Solvers\\';

    public static function get(string $class, array $args): AbstractSolver
    {
        $class = self::$sourceNamespace . $class;
        return new $class(...$args);
    }
}
