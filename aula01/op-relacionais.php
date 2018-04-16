<?php

// $num1 = readline('Digite o primeiro número: ' . PHP_EOL);
// $num2 = readline('Digite o segundo número: ' . PHP_EOL);

$num1 = 10;
$num2 = '10';
$num3 = 10;

echo '<pre>';
var_dump($num1 == $num2);
var_dump($num1 != $num2);
var_dump($num1 === $num2);
var_dump($num1 === $num3);
var_dump($num1 !== $num2);
var_dump($num1 !== $num3);
