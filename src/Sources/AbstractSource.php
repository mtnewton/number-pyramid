<?php

namespace MTNewton\NumberPyramid\Sources;

abstract class AbstractSource
{
    abstract public function getData(): array;

    abstract public function getFileName(): string;

    public function getSize(): int
    {
        return count($this->getData());
    }

    public function getNumber(int $row, int $col): int
    {
        return $this->getData()[$row][$col];
    }

    public function generate(string $fileName = null): string
    {
        $contents = "";
        for ($r = 0; $r < $this->getSize(); $r++) {
            for ($c = 0; $c <= $r; $c++) {
                $contents .= str_pad($this->getNumber($r, $c), 2, '0', STR_PAD_LEFT) . ' ';
            }
            $contents .= PHP_EOL;
        }
        $path = __DIR__ . '/../../generated/' . ($fileName ?? $this->getFileName());
        file_put_contents($path, $contents);
        return realpath($path);
    }
}
