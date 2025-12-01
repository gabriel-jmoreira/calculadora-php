<?php

namespace Calculadora\Operacoes;

class Soma implements Somar {
    public function somar(float $a, float $b): float {
        return $a + $b;
    }
}
