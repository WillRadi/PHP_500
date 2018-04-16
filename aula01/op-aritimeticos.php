<?php

$num1 = readline('Digite o primeiro número: ' . PHP_EOL);
$num2 = readline('Digite o segundo número: ' . PHP_EOL);

echo "A soma de {$num1} e {$num2} é: " . ($num1 + $num2) . PHP_EOL;
echo "A subtração de {$num1} e {$num2} é: " . ($num1 - $num2) . PHP_EOL;
echo "A multiplicação de {$num1} e {$num2} é: " . ($num1 * $num2) . PHP_EOL;
echo "A divisão de {$num1} e {$num2} é: " . ($num1 / $num2) . PHP_EOL;
echo "O módulo (resto da divisão) de {$num1} e {$num2} é: " . ($num1 % $num2) . PHP_EOL;