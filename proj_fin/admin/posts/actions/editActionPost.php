<?php
require '../../../include/funcs/general_functions.php';
session_start();
$posts = findAll('posts');

foreach ($posts as $post) {
	if ($post['titulo'] == $_POST['titulo'] && $post['id'] == $_POST['id']) {
		continue;
	} elseif ($post['titulo'] == $_POST['titulo']) {
		echo "Título já cadastrado.";
		echo "<br><a href='../../../site/index.php'>Voltar</a>";
		die();
	}
}

$insert = update('posts',
		[
		'titulo' 		=> $_POST['titulo'],
		'conteudo'		=> $_POST['conteudo'],
		'data_criacao'	=> date('d/m/y'),
		'publicado'		=> $_POST['publicado'],
		'id_usuario'	=> $_SESSION['id']
		],
		$_POST['id']
	);
header('location:../../../site/index.php');