<?php

use PHPUnit\Framework\TestCase;
use App\Factorial;

class FactorialTest extends TestCase
{
    private $calculo;

    protected function setUp(): void
    {
        $this->calculo = new Factorial();
    }

    public function testFactorial()
    {
        $this->assertSame(120, $this->calculo->calcularFactorial(5)); // de 5 es 120
       
    }
}
