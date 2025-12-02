<?php

use PHPUnit\Framework\TestCase;
use Calculadora\Operacoes\Multiplicacao;

class MultiplicacaoTest extends TestCase
{
    public function testMultiplicacaoSimples()
    {
        $multiplicacao = new Multiplicacao();
        $resultado = $multiplicacao->multiplicar(3, 4);

        $this->assertEquals(12, $resultado);
    }

    public function testMultiplicacaoComNumeroNegativo()
    {
        $multiplicacao = new Multiplicacao();
        $resultado = $multiplicacao->multiplicar(-5, 3);

        $this->assertEquals(-15, $resultado);
    }

    public function testMultiplicacaoComFloat()
    {
        $multiplicacao = new Multiplicacao();
        $resultado = $multiplicacao->multiplicar(2.5, 2.0);

        $this->assertEquals(5.0, $resultado);
    }

    public function testMultiplicacaoPorZero()
    {
        $multiplicacao = new Multiplicacao();
        $resultado = $multiplicacao->multiplicar(10, 0);

        $this->assertEquals(0, $resultado);
    }
}
