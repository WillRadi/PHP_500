<?php

echo '<pre>';

$pessoa = ['nome' => 'William', 'idade' => 26, 'email' => 'williamradi@gmail.com'];

echo 'Meu nome é ' . $pessoa['nome'] . ' tenho ' . $pessoa['idade'] . ' meu e-mail de contato é ' . $pessoa['email'] . PHP_EOL;
echo '<hr>';

echo '====== Ex 2 ======' . PHP_EOL;

$pessoas = [
	['nomeCompleto' => ['primeiro' => 'William', 'segundo' => 'Radi'], 'idade' => 26, 'email' => 'williamradi@gmail.com'],
	['nomeCompleto' => ['primeiro' => 'Dhessica', 'segundo' => 'Radi'], 'idade' => 25, 'email' => 'dhessicaradi@gmail.com'],
	['nomeCompleto' => ['primeiro' => 'Tobias', 'segundo' => 'Radi'], 'idade' => 2, 'email' => 'tobias_pug@gmail.com'],
];

foreach ($pessoas as $pessoa) {
	echo 'Meu nome é ' . $pessoa['nomeCompleto']['primeiro'] . ' ' . $pessoa['nomeCompleto']['segundo'] . ' tenho ' . $pessoa['idade'] . ' meu e-mail de contato é ' . $pessoa['email'] . PHP_EOL;
};

echo '<hr>';