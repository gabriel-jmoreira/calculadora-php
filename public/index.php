<?php

require __DIR__ . '/../vendor/autoload.php';

use Calculadora\Calculadora;

$calc = new Calculadora();

echo "Soma: " . $calc->somar(10, 5) . PHP_EOL;
echo "Subtração: " . $calc->subtrair(10, 5) . PHP_EOL;
echo "Multiplicação: " . $calc->multiplicar(10, 5) . PHP_EOL;
echo "Divisão: " . $calc->dividir(10, 5) . PHP_EOL;
