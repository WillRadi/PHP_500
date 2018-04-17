<?php

function negrito($msg = 'Padrão')
{
	echo '<strong>' . $msg . '</strong><br>';
}

// function soma($num1, $num2)
// {
// 	echo $num1 + $num2 . '<br>';
// }

negrito('Palvra');
echo '<hr>';

// De maneira ideal, funções n mostram valores. Apenas retornam.

$varGlobal = 2;

function soma($num1, $num2)
{
	global $varGlobal;
	return $num1 + $num2 + $varGlobal;
}

echo soma(2, 3) . '<br>';

echo '<hr>';

function add(&$fruta)
{
	++$frunta;
}

$laranjas = 5;
add($laranjas);

// $laranajas retorna 6;