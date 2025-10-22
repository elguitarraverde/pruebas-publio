<?php

use PHPUnit\Framework\TestCase;
use Usuario\PruebasPublio\App;

class AppTest extends TestCase
{
    public function testSumar()
    {
        $app = new App();
        $this->assertEquals(3.0, $app->sumar(1, 2));
    }
}
