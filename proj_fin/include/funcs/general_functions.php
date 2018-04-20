<?php

require_once dirname(__DIR__).'/database/config_data.php';

function connect()
{
	global $conString;
	return pg_connect($conString);
}

function insert (string $tabela, array $dados)
{
	foreach ($dados as $atributo => $valor) {
		$atributosArray[] = $atributo;
		$valoresArray[] = "'{$valor}'";
	}

	$atributosStr = implode(', ', $atributosArray);
	$valoresStr = implode(', ', $valoresArray);

	$query = "INSERT INTO {$tabela} ({$atributosStr}) VALUES ({$valoresStr})";
	pg_query(connect(), $query);
}

function delete (string $tabela, string $id)
{
	$query = "DELETE FROM {$tabela} WHERE id={$id}";
	pg_query(connect(), $query);
}

function update(string $tabela, array $dados, string $id)
{
	foreach ($dados as $atributo => $valor) {
		$setsArray[] = "{$atributo}='{$valor}'";
	}

	$setsStr = implode(', ', $setsArray);
	$query = "UPDATE {$tabela} SET {$setsStr} WHERE id={$id}";
	pg_query(connect(), $query);
}

function find(string $tabela, string $where)
{
	$query = "SELECT * FROM {$tabela} WHERE {$where}";
	$result = pg_query(connect(), $query);

	return pg_fetch_assoc($result);
}

function findAll(string $tabela, string $where = null)
{
	$query = "SELECT * FROM {$tabela}";
	if ($where) {
		$query .= " WHERE {$where}";
	}

	$result = pg_query(connect(), $query);
	return pg_fetch_all($result);
}