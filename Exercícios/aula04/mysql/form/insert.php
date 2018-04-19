<?php

require_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO usuarios (email, senha) VALUES ('{$email}', '{$senha}')";

$result = mysqli_query($con, $query);

// result torna-se um tipo RESOURCE. PHP consegue converter p boolean
if ($result) {
	echo 'ok';
} else {
	echo 'erro ao inserir';
}