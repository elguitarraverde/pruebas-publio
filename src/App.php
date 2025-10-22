<?php

namespace Usuario\PruebasPublio;

class App
{
    public function sumar(float $a, float $b): float
    {
        return $a + $b + 1;
    }

    public function restar(float $a, float $b): float
    {
        return $a - $b;
    }
}