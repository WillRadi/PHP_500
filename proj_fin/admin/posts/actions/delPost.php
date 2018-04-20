<?php
require '../../../include/funcs/general_functions.php';
session_start();

$id = $_GET['id'];
$post = find('posts', "id='{$id}'");

if (isset($_SESSION['id']) && $_SESSION['id'] == $post['id_usuario']) {
	delete('posts', $id);
	header('location:../../../site/index.php');
} else {
	echo "Impossível deletar<br>";
	echo "<a href='../../../site/index.php'>Voltar</a>";
}