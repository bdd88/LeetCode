<?php

class MovingAverage {
    private int $size;
    private array $values;

    function __construct(int $size)
    {
        $this->size = $size;
    }
  
    function next(int $val): float
    {
        $this->values[] = $val;
        if (sizeof($this->values) > $this->size) {
            array_shift($this->values);
        }
        return array_sum($this->values) / sizeof($this->values);
    }
}

$obj = new MovingAverage(3);
echo $obj->next(1) . PHP_EOL;
echo $obj->next(10) . PHP_EOL;
echo $obj->next(3) . PHP_EOL;
echo $obj->next(5) . PHP_EOL;