<?php

require __DIR__ . "/../vendor/autoload.php";

use MTNewton\NumberPyramid\NumberPyramid;

$pyramid = NumberPyramid::fromSeed(null, 1000);

echo 'File generated at: ' . $pyramid->generate() . PHP_EOL;

echo 'Min: ' . $pyramid->solveMin() . PHP_EOL;

echo 'Max: ' . $pyramid->solveMax() . PHP_EOL;
