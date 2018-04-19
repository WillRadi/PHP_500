<?php

require_once 'conexao.php';

echo '<pre>';
$query = "SELECT * FROM usuarios";

$result = mysqli_query($con, $query);

// para todos os registros encontrados:
// no MySQL, deve-se passar, juntamente com o resultado, a constante MYSQLI_ASSOC:
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// para apenas o primeiro registro (assoc, vem de associativo):
$dataAssoc = mysqli_fetch_assoc($result);

foreach ($data as $user) {
	echo $user['email'] . '<br>';
}