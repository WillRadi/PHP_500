<?php

$condicao = true;

if($condicao)
{
	echo "verdadeiro <br>";
}
echo "<hr>";

// ================

$idade = 19;

if ($idade > 18)
{
	echo 'Maior de idade <br>';
} else {
	echo 'Menor de idade <br>';
}
echo "<hr>";

// =================

$nota = 7;
$freq = 80;

if ($nota >= 6 && $freq >= 75)
{
	echo "Aprovado <br>";
} elseif($nota >=4 && $nota < 6 && $freq >= 75) {
	echo "Recuperação <br>";
} else {
	echo "Reprovado <br>";
}
echo "<hr>";