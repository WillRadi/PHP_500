<form>
	<input type="number" name="n1" placeholder="Primeiro valor">
	<input type="number" name="n2" placeholder="Segundo valor">
	<select name="operacao">
		<option value="soma">Somar</option>
		<option value="subt">Subtrair</option>
		<option value="mult">Multiplicar</option>
		<option value="divi">Dividir</option>
	</select>
	<br>
	<input type="submit" value="Calcular">
	<input type="reset" value="Limpar formulário">
</form>

<?php 
if (!empty($_GET)) {
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$oper = $_GET['operacao'];

	switch ($oper) {
		case 'soma':
			echo $n1 + $n2;
			break;
		case 'subt':
			echo $n1 - $n2;
			break;
		case 'mult':
			echo $n1 * $n2;
			break;
		case 'divi':
			echo $n1 / $n2;
			break;
	}
}