<?php

namespace Usuario\PruebasPublio;

class App
{
    public function sumar(float $a, float $b): float
    {
        return $a + $b;
    }

    public function restar(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiplicar(float $a, float $b): float
    {
        return $a * $b;
    }
}