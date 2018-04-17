<?php

echo '<pre>';

// =======Primeira sintaxe de contrução de array:

// $array[] = 'valor1';
// $array[] = 'valor2';
// $array[] = 10;

// =======Segunda sintaxe de contrução de array:

// $array = array('valor1', 'valor2', 10);

$array = ['valor1', 'valor2', 10];

// Lembrar que echo n mostra arrays inteiros.

print_r($array);
var_dump($array);

echo '<hr>';

echo $array[0] . '<br>';
echo $array[1] . '<br>';
echo $array[2] . '<br>';

echo '<hr>';

for ($i=0; $i <= 2; $i++) { 
	echo $array[$i] . '<br>';
}

echo '<hr>';
echo '============= Array associativo';
echo '<br>';

$arrayAssoc['nome'] = 'William';
$arrayAssoc['idade'] = 26;

echo "Nome: " . $arrayAssoc['nome'] . '<br>';
echo "Idade: " . $arrayAssoc['idade'] . '<br>';