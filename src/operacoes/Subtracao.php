<?php

namespace Calculadora\Operacoes;

class Subtracao implements Subtrair {
    public function subtrair(float $a, float $b): float {
        return $a - $b;
    }
}
