<?php

use PHPUnit\Framework\TestCase;
use Calculadora\Operacoes\Soma;

class SomaTest extends TestCase {

    public function testSomarValoresPositivos() {
        $soma = new Soma();
        $this->assertEquals(15, $soma->somar(10, 5));
    }

    public function testSomarComZero() {
        $soma = new Soma();
        $this->assertEquals(10, $soma->somar(10, 0));
    }

    public function testSomarValoresNegativos() {
        $soma = new Soma();
        $this->assertEquals(-10, $soma->somar(-3, -7));
    }
}
