<?php

$nome = 'William';

$textoHeredoc = <<< TEXTONOMEHD
ESTE É O HEREDOC: Vamos ver se vai funcionar. Se sim, meu nome é $nome
TEXTONOMEHD;

echo $textoHeredoc;

echo '<hr>';

$textoNowdoc = <<< 'TEXTONOMEND'
ESTE É O HEREDOC: Vamos ver se vai funcionar. Se sim, meu nome é $nome
TEXTONOMEND;

echo $textoNowdoc;