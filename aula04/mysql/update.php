<?php

require_once 'conexao.php';

$id = 4;
$email = 'novo@novo';
$senha = '546879';

$query = "UPDATE usuarios SET senha='{$senha}' WHERE id='{$id}'";

$result = mysqli_query($con, $query);

if ($result) {
	echo 'Alterado';
} else {
	echo 'Não alterado';
}