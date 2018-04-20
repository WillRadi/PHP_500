<?php
require_once '../../../include/funcs/general_functions.php';

echo "Cadastro de novo usuario" . PHP_EOL;

$nome = readline("Nome: " . PHP_EOL);
$email = readline("E-mail: " . PHP_EOL);
$senha = readline("Senha: " . PHP_EOL);

$usuarios = findAll('usuarios');
foreach ($usuarios as $usuario) {
	if ($nome == $usuario['nome'] || $email == $usuario['email']) {
		echo "usuário já cadastrado" . PHP_EOL;
		die();
	}
}

$dados = [
		'nome'	=> $nome,
		'email'	=> $email,
		'senha'	=> $senha
	];

insert('usuarios', $dados);

echo "Usuário " . strtoupper($nome) . " cadastrado com sucesso." . PHP_EOL;