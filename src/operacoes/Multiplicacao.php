<?php

namespace Calculadora\Operacoes;

class Multiplicacao implements Multiplicar {
    public function multiplicar(float $a, float $b): float {
        return $a * $b;
    }
}
