<?php

echo "--- IF ---" . PHP_EOL;

$num1 = readline('Digite o valor da variável num1: ');

if ($num1 % 2 == 0)
{
	echo "{$num1} é PAR" . PHP_EOL;
} else {
	echo "{$num1} é ÍMPAR" . PHP_EOL;
}

echo "-----------------------" . PHP_EOL;

$salario = readline('Digite o salário do funcionário: ' . PHP_EOL);
$tempoServ = readline('Digite o tempo de serviço do funcionário: ' . PHP_EOL);
$reclamacoes = readline('O funcionário tem reclamações (true / false)? ' . PHP_EOL);

if ($salario >= 1000 && $tempoServ >= 12 && $reclamacoes == false)
{
	echo "Funcionário pode ser promovido." . PHP_EOL;
} else {
	echo "Funcionário NÃO pode ser promovido." . PHP_EOL;
}

echo "-----------------------" . PHP_EOL;

$nota = readline('Digite a nota do aluno: ' . PHP_EOL);
$freq = readline('Digite a frequência do aluno: ' . PHP_EOL);

if ($nota >= 7 && $freq >= 8)
{
	echo "Aluno aprovado" . PHP_EOL;
} elseif ($nota >= 5 && $nota < 7 && $freq >= 8) {
	echo "Aluno em recuperação" . PHP_EOL;
} else {
	echo "Aluno reprovado" . PHP_EOL;
}

echo "-----------------------" . PHP_EOL;
echo 'Notas em switch' . PHP_EOL;
echo "-----------------------" . PHP_EOL;

switch (true) {
	case ($nota >= 7 && $freq >= 8):
		echo "Aluno aprovado" . PHP_EOL;
		break;
	case ($nota >= 5 && $nota < 7 && $freq >= 8):
		echo "Aluno em recuperação" . PHP_EOL;
		break;	
	default:
		echo "Aluno reprovado" . PHP_EOL;
		break;
}