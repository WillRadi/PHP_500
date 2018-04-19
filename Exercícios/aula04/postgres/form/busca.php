<?php

require_once 'banco.php';

$usuarios = buscarTodos('usuarios');

?>
<table>
	<tr>
		<td>Email</td>
		<td>Senha</td>
		<td>Ações</td>
	</tr>
	<?php foreach ($usuarios as $usuario) :?>
		<tr>
			<td><?= $usuario['email'] ?></td>
			<td><?= $usuario['senha'] ?></td>
			<td>
				<form method="POST" action="deletar.php">
					<a href="form.php?id=<?= $usuario['id'] ?>">Editar</a>
					<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
					<input type="submit" value="Excluir">
				</form>
			</td>
		</tr>
	<?php endforeach ?>
</table>