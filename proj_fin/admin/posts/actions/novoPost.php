<?php
require_once '../../../include/funcs/general_functions.php';
session_start();
$posts = findAll('posts');
foreach ($posts as $post) {
	if ($post['titulo'] == $_POST['titulo']) {
		echo "Título já cadastrado.";
		echo "<br><a href='../../../site/index.php'>Voltar</a>";
		die();
	}
}

$insert = insert('posts',
	[
		'titulo' 		=> $_POST['titulo'],
		'conteudo'		=> $_POST['conteudo'],
		'data_criacao'	=> date('d/m/y'),
		'publicado'		=> $_POST['publicado'],
		'id_usuario'	=> $_SESSION['id']
		]
	);
header('location:../../../site/index.php');