<?php

require_once 'banco.php';

if (isset($_GET['id'])) {
	$where = "id=" . $_GET['id'];
	$usuario = buscar('usuarios', '*', $where);
} else {
	$usuario['id'] = null;
	$usuario['email'] = null;
	$usuario['senha'] = null;
}