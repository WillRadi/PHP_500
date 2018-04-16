<?php

$num = readline('Digite o valor base: ' . PHP_EOL);
$soma = readline('Digite número somado ao principal: ' . PHP_EOL);

echo "Soma: " . ($num += $soma) . PHP_EOL;
echo "Subtração: " . ($num -= $soma) . PHP_EOL;