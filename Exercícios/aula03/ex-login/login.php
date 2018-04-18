<html>
	<form action="" method="POST">
		<p>Login: <input type="text" name="login"></p>
		<p>Senha: <input type="password" name="password"></p>
		<input type="submit" value="Enviar">
	</form>
</html>


<?php
if (!empty($_POST)) {
	if ($_POST['login'] != 'admin' || $_POST['password'] != 'admin') {
		echo "Login ou senha inválidos";
	} else {
		session_start();
		$_SESSION['logado'] = true;
		header('location:app.php');
	}
}
?>