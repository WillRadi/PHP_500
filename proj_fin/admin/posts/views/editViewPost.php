<?php
require '../../../include/funcs/general_functions.php';

session_start();

if (!isset($_SESSION['id'])) {
	header('location:../../../site/index.php');
}

$id = $_GET['id'];
$post = find('posts', "id='{$id}'");

?>

<h1>Editando post</h1>
<form action="../actions/editActionPost.php" method="POST">
	<input type="hidden" name="id" value="<?= $post['id']?>">
	<p>Título:</p>
	<input type="text" name="titulo" value="<?= $post['titulo']?>">
	<p>Conteúdo: </p>
	<textarea name="conteudo" rows="5" cols="50"><?= $post['conteudo']?></textarea>
	<p>
		Publicar?:
		<input type="radio" name="publicado" value="true"  checked> Sim 
		<input type="radio" name="publicado" value="false"> Não
	</p>
	<br>
	<input type="submit" value="Salvar">
	<input type="reset" value="Limpar fomulário">
</form>