<?php

namespace MTNewton\NumberPyramid\Factories;

use MTNewton\NumberPyramid\Sources\AbstractSource;

class SourceFactory
{
    static $sourceNamespace = 'MTNewton\\NumberPyramid\\Sources\\';

    public static function get(string $class, array $args): AbstractSource
    {
        $class = self::$sourceNamespace . $class;
        return new $class(...$args);
    }
}
