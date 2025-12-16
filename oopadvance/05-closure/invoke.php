<?php

class isPositiveInt {
    public function __invoke($value)
    {
        return ((int) $value == $value) && $value > 0;
    }
}

$invoke = new isPositiveInt();

var_dump($invoke(10));
var_dump($invoke(-10));
var_dump($invoke(0));
var_dump($invoke(5.5));
var_dump($invoke("10"));