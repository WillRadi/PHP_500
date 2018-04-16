<?php

$fim = false;
do {
	echo '-------------------' . PHP_EOL;
	echo '- 1 = Soma---------' . PHP_EOL;
	echo '- 2 = Subtação-----' . PHP_EOL;
	echo '- 3 = Divisão------' . PHP_EOL;
	echo '- 4 = Multiplicação' . PHP_EOL;
	echo '- 5 = Sair---------' . PHP_EOL;
	echo '-------------------' . PHP_EOL;

	$opcao = readline("Escolha uma opção: ");

	switch ($opcao) {
		case 1:
			echo "2 + 2 = " . 2+2 . PHP_EOL;
			break;
		case 2:
			echo "2 - 2 = " . 2-2 . PHP_EOL;
			break;
		case 3:
			echo "2 / 2 = " . 2/2 . PHP_EOL;
			break;
		case 4:
			echo "2 * 2 = " . 2*2 . PHP_EOL;
			break;
		case 5:
			$fim = true;
			break;
		default:
			echo "Opção inválida" . PHP_EOL;
			break;
	}
} while (!$fim);