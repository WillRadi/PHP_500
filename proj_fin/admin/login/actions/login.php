<?php 
require_once '../../../include/funcs/general_functions.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuarios = findAll('usuarios');

foreach ($usuarios as $usuario) {
	if ($email == $usuario['email'] && $senha == $usuario['senha']){
		session_start();
		$_SESSION['logado'] = true;
		$_SESSION['nome'] 	= $usuario['nome'];
		$_SESSION['id']		= $usuario['id'];
		$_SESSION['email']	= $usuario['email'];
		header('location:../../../site/index.php');
	} elseif ($email == $usuario['email'] && $senha != $usuario['senha']) {
		echo "Senha inválida<br><a href='../views/login.html'>Voltar</a>";
		die();
	}
}
echo "Usuário não cadastrado<br><a href='../views/login.html'>Voltar</a>";