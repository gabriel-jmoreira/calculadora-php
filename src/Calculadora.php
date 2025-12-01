<?php

namespace Calculadora;

use Calculadora\Operacoes\Soma;
use Calculadora\Operacoes\Subtracao;
use Calculadora\Operacoes\Multiplicacao;
use Calculadora\Operacoes\Divisao;

class Calculadora {

    private Soma $soma;
    private Subtracao $sub;
    private Multiplicacao $mult;
    private Divisao $div;

    public function __construct() {
        $this->soma = new Soma();
        $this->sub = new Subtracao();
        $this->mult = new Multiplicacao();
        $this->div = new Divisao();
    }

    public function somar(float $a, float $b): float {
        return $this->soma->somar($a, $b);
    }

    public function subtrair(float $a, float $b): float {
        return $this->sub->subtrair($a, $b);
    }

    public function multiplicar(float $a, float $b): float {
        return $this->mult->multiplicar($a, $b);
    }

    public function dividir(float $a, float $b): float {
        return $this->div->dividir($a, $b);
    }
}
