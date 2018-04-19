<?php
// Escrever a conexão com banco de dados
// Precisa-se saber:

//IP ou site onde está o banco de dados
$host = "localhost";
$port = 5432;
$dbname = "aula03";
$dbuser = "will";
$dbpass = 123;

$stringConexao = "host={$host} port={$port} dbname={$dbname} user={$dbuser} password={$dbpass}";

$con = pg_connect($stringConexao);