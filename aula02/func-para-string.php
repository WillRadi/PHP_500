<?php

echo $string = 'a linguagem PHP é da hora<br>';
echo '<hr>';
echo strtoupper($string);
echo strtolower($string);
echo ucfirst($string);
echo ucwords($string);
echo strlen($string) . '<br>';
// Substituir vaores na str:
echo str_replace('é', 'eh', $string);
echo str_replace(['é', 'PHP'], ['eh', 'Java'], $string);
//----
// Removendo caracteres em branco no início e fim:
$string2 = '         Nova sting com espaços de montão                 ';
echo $string2 . '<br>';
echo strlen($string2) . '<br>';
$string2 = trim($string2);
echo strlen($string2) . '<br>';