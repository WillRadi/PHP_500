<?php

function conectar()
{
	return mysqli_connect('localhost', 'will', '@da4linux', 'aula04');
}

function inserir(string $tabela, array $dados)
{
	foreach ($dados as $campo => $valor) {
		$campos[] = $campo;
		$valores[] = $valor;
	}

	$campos = implode(',', $campos);
	$valores = implode(',', $valores);

	$query = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";

	echo $query;
	mysqli_query(conectar(), $query);
}

function editar(string $tabela, array $dados, string $onde)
{
	foreach ($dados as $campo => $valor) {
		$sets[] = "{$campo}='{$valor}'";
	}

	$sets = implode(',', $sets);

	$query = "UPDATE {$tabela} SET {$sets} WHERE {$onde}";

	mysqli_query(conectar(), $query);
}

function deletar(string $tabela, string $onde)
{
	$query = "DELETE FROM {$tabela} WHERE {$onde}";

	mysqli_query($con,$query);
}

function buscar(string $tabela, string $campos = '*', string $onde)
{
	$query = "SELECT {$campos} FROM {$tabela} WHERE {$onde}";
	
	$result = $pg_query(conectar(), $query);
	return mysqli_fetch_assoc($result);
}

function buscarTodos(
	string $tabela, 
	string $campos = '*', 
	string $onde = null, 
	string $filtro = null, 
	string $ordem = null,
	int $limite = null)
{
	$query = "SELECT {$campos} FROM {$tabela}";

	if ($onde) {
		$query .= " WHERE {$onde}";
	}

	if ($filtro && $onde) {
		$query .= " AND {$filtro}";
	}

	if ($ordem) {
		$query .= " ORDER BY {$ordem}";
	}

	if ($limite) {
		$query .= " LIMIT {$limite}";
	}

	$result = mysqli_query(conectar(), $query);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}