<?php

echo '<pre>';

$nomes = ['William', 'José', 'João'];
print_r($nomes);

echo '<hr>';

foreach ($nomes as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
};

echo '<hr>';

$pessoa1 = ['nome' => 'William', 'idade' => 26, 'profissao' => 'Programador'];
$pessoa2 = ['nome' => 'Dhessica', 'idade' => 25, 'profissao' => 'Gerente'];

foreach ($pessoa1 as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
};

echo '<hr>';

$pessoas[] = $pessoa1;
$pessoas[] = $pessoa2;

foreach ($pessoas as $pessoa) {
	echo $pessoa['nome'] . PHP_EOL;
}
echo '<hr>';