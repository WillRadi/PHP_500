<!DOCTYPE html>
<meta charset="utf-8">
<html>
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		<title>Formulário</title>

	</head>
	<body>
		<div class="container">
			<?php require 'editar.php' ?>
			<form method="POST">
				<p>Email: <input type="text" name="email" required placeholder="Digite seu email..." value="<?= $usuario['email']?>"></p>
				<p>Senha: <input type="password" name="senha" required placeholder="Crie sua nova senha..." value="<?= $usuario['senha']?>"></p>
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<input type="submit" value="Cadastrar" class="btn">
				<a href="salvaAlteracao.php">
					<button class="btn">Salvar alterações</button>
				</a>
			</form>

			<?php 
				require 'busca.php';
				require 'insert.php';
			?>
		</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	</body>
</html>