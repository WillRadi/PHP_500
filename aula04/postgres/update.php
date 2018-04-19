<?php

require_once 'conexao.php';

// retornando todos os campos do usuário:
$id = 		8;
$email = 	'novo@novo';
$senha = 	'1324';

$query = "UPDATE usuarios SET email='{$email}', senha='{$senha}' WHERE id={$id}";

$result = pg_query($con, $query);

// result torna-se um tipo RESOURCE. PHP consegue converter p boolean
if ($result) {
	echo 'ok';
} else {
	echo 'erro ao inserir';
}