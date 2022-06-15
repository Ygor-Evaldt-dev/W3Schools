<?php
/*
A preg_match()função informará se uma string contém correspondências de um padrão.
Retorna 1 se o padrão foi encontrado na string e 0 se não
*/

$string = "Isto é Apenas um exemplo";
$busca = "/apen/i";

echo "<p>A quantidade de correspondências de [$busca] na string [$string] é: </p>" . preg_match($busca, $string);
