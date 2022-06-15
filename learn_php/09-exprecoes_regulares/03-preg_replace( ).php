<?php
/* A preg_replace()função substituirá todas as correspondências do padrão em uma string por outra string. */

$string = "Este é um exemplo de variável contendo uma string";
$busca = "/string/i";

echo "$string <br>";
echo "A string usando o método 'preg_replace()' = " . preg_replace($busca, "frase", $string);
