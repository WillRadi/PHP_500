<?php

// Pode ser passado para a função qual o tipo de retorno que se espera:
// function nomeFuncao(string $parametro) : string --> tipo de retorno

function parImpar(int $num)
{
	if ($num % 2 == 0) {
		return 'O número passado é par';
	} else {
		return 'O númeor passado é ímpar';
	}
}

function isMaiorIdade(int $idade)
{
	if($idade < 18)
	{
		return false;
	} else {
		return true;
	}
}

function qualOMaior(int $num1, int $num2)
{
	if ($num1 > $num2) {
		return $num1;
	} else {
		return $num2;
	}
}

function podeDirigir(int $idade, bool $temCNH) : string
{
	if (isMaiorIdade($idade) && $temCNH == true){
		return 'Pode dirigir';
	} elseif (isMaiorIdade($idade) && $temCNH == false){
		return 'Não tem CNH, não pode dirigir';
	} else {
		return 'Ainda não tem idade';
	}
}

$num = readline('Digite um número para verificar se ele é par ou ímpar: ' . PHP_EOL);
echo parImpar($num) . PHP_EOL;

$idade = readline('Diga sua idade para saber se vc é de maior: ' . PHP_EOL);
echo isMaiorIdade($idade) . PHP_EOL;

$num1 = readline('Digite um número para comparação: ' . PHP_EOL);
$num2 = readline('Digite outro número para comparação: ' . PHP_EOL);
echo 'O número ' . qualOMaior($num1, $num2) . ' é maior'. PHP_EOL;

$idadeCNH = readline('Qual sua idade? ' . PHP_EOL);
$cnh = readline('Você tem CNH? ' . PHP_EOL);
echo podeDirigir($idadeCNH, $cnh) . PHP_EOL;

