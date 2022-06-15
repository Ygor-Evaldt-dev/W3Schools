<?php

/* A preg_match_all()função lhe dirá quantas correspondências foram encontradas para um padrão em uma string. */

$string = "Este é um exemplo de variável que contem uma string";
$busca = "/um/i";

echo "Quantidade de vezes que aparece a correspondência 'um' - " . preg_match_all($busca, $string);
