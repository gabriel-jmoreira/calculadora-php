<?php

namespace Calculadora\Operacoes;

class Divisao implements Dividir {
    public function dividir(float $a, float $b): float {
        if ($b == 0) {
            throw new \InvalidArgumentException("Não é possível dividir por zero");
        }
        return $a / $b;
    }
}
