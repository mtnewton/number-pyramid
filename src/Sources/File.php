<?php

namespace MTNewton\NumberPyramid\Sources;

class File extends AbstractSource
{
    protected $data;

    public function __construct($file)
    {
        $this->data = file($file, FILE_IGNORE_NEW_LINES & FILE_SKIP_EMPTY_LINES);
        foreach ($this->data as $index => $row) {
            $this->data[$index] = array_map('intval', explode(' ', trim($row)));
        }
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getFileName(): string
    {
        return date('Ymd-His').'.txt';
    }
}
