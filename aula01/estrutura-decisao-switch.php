<?php

echo '-------------------' . PHP_EOL;
echo '- 0 = Soma---------' . PHP_EOL;
echo '- 1 = Subtação-----' . PHP_EOL;
echo '- 2 = Divisão------' . PHP_EOL;
echo '- 3 = Multiplicação' . PHP_EOL;
echo '-------------------' . PHP_EOL;

$opcao = readline("Escolha uma opção: ");

switch ($opcao) {
	case 0:
		echo "2 + 2 = " . 2+2 . PHP_EOL;
		break;
	case 1:
		echo "2 - 2 = " . 2-2 . PHP_EOL;
		break;
	case 2:
		echo "2 / 2 = " . 2/2 . PHP_EOL;
		break;
	case 3:
		echo "2 * 2 = " . 2*2 . PHP_EOL;
		break;	
	default:
		echo "Opção inválida" . PHP_EOL;
		break;
}

// Outra forma de fazer o Switch

$num = 10;

switch (true) {
	case ($num > 10 && $num < 20):
		echo 'Número ' . $num;
		break;
	case ($num < 10 || $num > 20):
		echo 'Número ' . $num;
		break;
	default:
		echo 'Nada é TRUE';
		break;
}