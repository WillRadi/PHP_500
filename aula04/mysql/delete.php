<?php

require_once 'conexao.php';

$id = 6;

$query = "DELETE FROM usuarios WHERE id={$id}";

$result = mysqli_query($con, $query);

if ($result) {
	echo 'Registro(s) deletado(s) com sucesso';
} else {
	echo 'Ninguém foi deletado';
}