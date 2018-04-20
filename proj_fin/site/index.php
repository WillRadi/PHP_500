<!DOCTYPE html>
<meta charset="utf-8">
<html>
	<head>
		<title>Posts</title>
	</head>
	<body>
		<?php
			session_start();
			if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
				include_once 'layout/botoes.php';
			} else {
				echo "<a href='../admin/login/views/login.html'><button>Login</button></a>";
			}
		 ?>
		<h1>Posts do blog PHP</h1>
		<?php
			require_once dirname(__DIR__).'/include/funcs/general_functions.php';
			$posts = findAll('posts');
		?>
		<table style="width:100%" border="10">
			<?php foreach ($posts as $post) : ?>
				<tr>
					<th>Titulo</th>
					<td><?= $post['titulo']?></td>
				</tr>
				<tr>
					<th>Conteúdo</th>
					<td><?= $post['conteudo']?></td>
				</tr>
				<tr>
					<th>Publicado em: </th>
					<td><?= $post['data_criacao']?></td>
				</tr>
				<?php if(isset($_SESSION['logado'])) :?>
					<tr>
						<th>Ações: </th>
						<td>
							<a href="../admin/posts/actions/delPost.php?id=<?= $post['id']?>">
								<button>Deletar post</button>
							</a>
							<a href="../admin/posts/views/editViewPost.php?id=<?= $post['id']?>">
								<button>Alterar post</button>
							</a>
						</td>
					</tr>
				<?php endif ?>
			<?php endforeach ?>
		</table>


	</body>
</html>