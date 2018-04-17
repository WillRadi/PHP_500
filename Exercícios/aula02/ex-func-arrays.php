<?php

// Crir função q gere um array c nros aleatórios de 0 a 10. Deve receber como parâmetro a quabntidade de índices do array. Deve retornar o array preenchido.

// exibir todos os nros do array separados por vírgula.
// o primeiro nro do array;
// o último nro do array;
// pares
// ímpares
// maior
// menor
// ordem crescente
// ordem decrescente

function geraNumeros($qtd)
{
	for ($i = 0; $i < $qtd; $i++)
	{
		$numeros[] = rand(0, 10);
	}

	return $numeros;
}

$qtdNumeros = 10;
$nrosAleatorios = geraNumeros($qtdNumeros);

echo 'Todos os números do array:<br>';
foreach ($nrosAleatorios as $value) {
	echo $value . ', ';
}
echo '<hr>';

echo 'Primeiro número do array:<br>';
echo $nrosAleatorios[0];
echo '<hr>';

echo 'Último número do array:<br>';
echo $nrosAleatorios[$qtdNumeros-1];
echo '<hr>';

echo 'Números pares:<br>';
for($i = 0; $i < $qtdNumeros; $i++)
{
	if($nrosAleatorios[$i] % 2 == 0)
	{
		echo $nrosAleatorios[$i] . ', ';
	}
}
echo '<hr>';

echo 'Números ímpares:<br>';
for($i = 0; $i < $qtdNumeros; $i++)
{
	if($nrosAleatorios[$i] % 2 != 0)
	{
		echo $nrosAleatorios[$i] . ', ';
	}
}
echo '<hr>';

echo 'Maior número da seq:<br>';
$maior = 0;
for($i = 0; $i < $qtdNumeros; $i++)
{
	if($nrosAleatorios[$i] > $maior)
	{
		$maior = $nrosAleatorios[$i];
	}
}
echo $maior;
echo '<hr>';

echo 'Menor número da seq:<br>';
$menor = 10;
for ($i=0; $i < $qtdNumeros; $i++)
{ 
	if($nrosAleatorios[$i] < $menor)
	{
		$menor = $nrosAleatorios[$i];
	}
}
echo $menor;
echo '<hr>';

echo 'Ordem crescente:<br>';
// Minha versão pela metade...
// for ($i=0; $i < $qtdNumeros; $i++)
// { 
// 	for ($cont=$i; $cont < $qtdNumeros; $cont++)
// 	{ 
// 		if($nrosAleatorios[$i] < $nrosAleatorios[$cont])
// 		{
// 			$arrayAsc[$cont] = $nrosAleatorios[$i];
// 		}
// 	}
// }

// foreach ($arrayAsc as $value) {
// 	echo $value . ', ';
// }

// REFAZER LEMBRANDO DE QUE O FOR DE DENTRO ESTARÁ UM ESPAÇO À FRENTE DO DE FORA