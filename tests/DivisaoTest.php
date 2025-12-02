<?php

use PHPUnit\Framework\TestCase;
use Calculadora\Operacoes\Divisao;

class DivisaoTest extends TestCase
{
    public function testDivisaoSimples()
    {
        $divisao = new Divisao();
        $resultado = $divisao->dividir(10, 2);

        $this->assertEquals(5, $resultado);
    }

    public function testDivisaoComNumeroNegativo()
    {
        $divisao = new Divisao();
        $resultado = $divisao->dividir(-20, 4);

        $this->assertEquals(-5, $resultado);
    }

    public function testDivisaoComFloat()
    {
        $divisao = new Divisao();
        $resultado = $divisao->dividir(7.5, 2.5);

        $this->assertEquals(3.0, $resultado);
    }

    public function testDivisaoPorZeroLancaExcecao()
    {
        $divisao = new Divisao();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Não é possível dividir por zero");

        $divisao->dividir(10, 0);
    }
}
