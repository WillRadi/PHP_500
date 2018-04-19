<?php

require_once 'banco.php';

if (!empty($_POST)) {
		
	conectar();
	$dados = ['email' => $_POST['email'], 'senha' => $_POST['senha']];
	inserir('usuarios', $dados);

	if ($result) {
		echo 'Cadastrado com sucesso!';
	} else {
		echo 'impossível cadastrar!';
	}
	header('location:form.php');
}