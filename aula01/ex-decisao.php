<?php
// 1- Receba dois números e retorna qual o maior número;
// 2- Receba um número e retorne se ele é par ou inpar;

echo "Exercício 1" . PHP_EOL;
echo "=================" . PHP_EOL;

$num1 = readline("Digite um número: " . PHP_EOL);
$num2 = readline("Digite mais um número: " . PHP_EOL);

if ($num1 > $num2)
{
	echo "{$num1} é maior do que {$num2}" . PHP_EOL;
} elseif ($num1 < $num2){
	echo "{$num2} é maior do que {$num1}" . PHP_EOL;
} else {
	echo "{$num2} é igual a {$num1}" . PHP_EOL;
}

echo "Exercício 2" . PHP_EOL;
echo "=================" . PHP_EOL;

$num = readline("Digite o número para saber se ele é par ou ímpar: " . PHP_EOL);
if ($num % 2 == 0)
{
	echo "{$num} é PAR" . PHP_EOL;
} else {
	echo "{$num} é ÍMPAR" . PHP_EOL;
}