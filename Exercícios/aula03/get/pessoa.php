<a href="index.php">Voltar</a><hr>
<?php
	$nome = $_GET['nome'];
	if($nome == 'William Radi')
	{
		echo 'Olá. Você selecionou o William';
	} elseif ($nome == 'Dhessica Radi') {
		echo 'Olá. Você selecionou a Dhessica';
	} else {
		echo 'Olá. Você selecionou a Wendy';
	}