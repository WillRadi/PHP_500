<?php

$host = 'localhost';
$porta = 5432;
$dbname = 'aula04';
$user = 'will';
$senha = '123';

$stringConexao = "host={$host} port={$porta} dbname={$dbname} user={$user} password={$senha}";

$con = pg_connect($stringConexao);