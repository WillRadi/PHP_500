<?php

require_once 'conexao.php';

// $query = "SELECT * FROM usuarios";

// $result = pg_query($con, $query);

// echo '<pre>';
// var_dump($result);

// código acima n funciona pq p retorno de dados, é necessário uso das funções específicas: FETCH e FETCH_ASSOC:
echo '<pre>';
$query = "SELECT * FROM usuarios";

$result = pg_query($con, $query);

// para todos os registros encontrados:
$data = pg_fetch_all($result);

// para apenas o primeiro registro:
$dataAssoc = pg_fetch_assoc($result);

foreach ($data as $user) {
	echo $user['email'] . '<br>';
}