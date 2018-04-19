<?php

require_once 'conexao.php';

$id = 10;
$email = 'novo@novo';

// $query = "DELETE FROM usuarios WHERE email='{$email}'";
$query = "DELETE FROM usuarios WHERE id='{$id}'";

$result = pg_query($con, $query);

var_dump($result);

if ($result) {
	echo 'Registro(s) deletado(s) com sucesso';
} else {
	echo 'Ninguém foi deletado';
}