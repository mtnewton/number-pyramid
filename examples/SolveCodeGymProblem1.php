<?php

require __DIR__ . "/../vendor/autoload.php";

use MTNewton\NumberPyramid\NumberPyramid;

echo NumberPyramid::fromFile(__DIR__ . "/files/codegym-problem-1.txt")->solveMax() . PHP_EOL;
