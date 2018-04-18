<form method="GET">
	<h4>Calculadora</h4>
	<p>Primeiro número: <input type="number" name="num1"></p>
	<p>Segundo número: <input type="number" name="num2"></p>
	<input type="submit" name="Calcular">
</form>

<?php

if (!empty($_GET)) {
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];

	$soma = $num1 + $num2;
	$subtracao = $num1 - $num2;
	$divisao = $num1 / $num2;
	$multiplicacao = $num1 * $num2;

	echo '<pre>';

	echo "Soma: {$soma} <br>";
	echo "Subt: {$subtracao}<br>";
	echo "Divi: {$divisao}<br>";
	echo "Mult: {$multiplicacao}<br>";
}

