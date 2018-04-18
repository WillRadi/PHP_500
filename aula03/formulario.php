<!DOCTYPE html>
<!-- NAME do input é o chave do array -->
<html>
	<form action="" method="POST">
		<p>Nome: <input type="text" name="nome" required></p>
		<p>Idade: <input type="number" name="idade"></p>
		<p>E-mail: <input type="email" name="email"></p>
		<p>Senha: <input type="password" name="senha"></p>
		<p>Cor: <input type="color" name="cor"></p>
		<p>Sexo: <input type="radio" name="sexo" value="M">M || <input type="radio" name="sexo" value="F">F</p>
		<p>
			Cursos: <br>
			<input type="checkbox" name="cursos[]" value="php"> PHP
			<input type="checkbox" name="cursos[]" value="linux"> Linux
			<input type="checkbox" name="cursos[]" value="frontend"> Front-end
		</p>
		<input type="hidden" name="token" value="abc123">
		<p>Range: <input type="range" name="range" min="0" max="10"></p>
		<input type="reset">
		<input type="submit" value="Enviar">
	</form>
</html>

<?php
echo '<pre>';
if (!empty($_POST)) {
	print_r($_POST);
}

?>