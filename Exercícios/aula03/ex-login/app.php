<?php
session_start();
if (!$_SESSION['logado']) {
	header('location:login.php');
}
?>
<p>Dentro do app.</p>
<a href="logoff.php">sair</a>