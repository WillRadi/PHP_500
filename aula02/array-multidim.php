<?php

echo '<pre>';

$temperaturas = 
[
	'2018' => [
		'Jan' => 28,
		'Fev' => 29,
		'Mar' => 27,
	],
	'2017' => [
		'Jan' => 28,
		'Fev' => 30,
		'Mar' => 12,
	],
];

print_r($temperaturas);

echo '<hr>';
echo '===== Mostrando valores dos arrays associativos';
echo '<br>';
echo '<br>';

echo 'Temperatura em janeiro de 2018: ' . $temperaturas['2018']['Jan'];