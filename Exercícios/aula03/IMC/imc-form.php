<!DOCTYPE html>
<meta charset="utf-8">
<h1>Calculadora de IMC</h1>
<form method="POST">
	<p><input type="text" name="peso" placeholder="Quanto você pesa?"></p>
	<p><input type="text" name="altura" placeholder="Qual sua altura?"></p>
	<input type="submit" value="Calcular">
	<input type="reset" value="Apagar">
</form>

<?php 
	include 'imc-calculo.php';
?>