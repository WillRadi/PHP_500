<?php

echo '<pre>';
$array = [10, 4, 5, 8, 1, 7, 4, 2];
print_r($array);

echo 'Ordenação:<br>';
sort($array);
print_r($array);


echo 'Cubo: <br>';
$arrayCubo = [1, 2, 3];

function cubo($num)
{
	return $num * $num * $num;
}

foreach ($arrayCubo as $value) {
	echo cubo($value) . '<br>';
}

echo 'Cubo com array_map: <br>';
// Executa a mesma função para todos os ítens do array;
$cubo = array_map('cubo', $arrayCubo);
print_r($cubo);

echo 'quadrado com função anônima e array_map: <br>';
$quadrado = array_map(function($num){
	return $num * $num;
}, $arrayCubo);
print_r($quadrado);

echo '<hr>';

function par($num)
{
	return 'lala';
}

// echo array_filter($array, 'par');

echo '<hr>';

$pessoa = ['nome' => 'Will', 'idade' => 26];
if (array_key_exists('nome',$pessoa)) // procura chave
{
	echo $pessoa['nome'];
}