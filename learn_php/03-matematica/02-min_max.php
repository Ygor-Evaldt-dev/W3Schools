<?php
/* As funções min() e max() servem pra retornar o menor ou maior valor de uma lista.
Se a lista for númerica retornara o menor ou maior valor.
Se a lista for de strings ou letras, retornara o maior ou menor caracterie de acordo com a posição no alfabeto */

$lista = [1, 3, 46, 2, 9, 4];
echo min($lista) . PHP_EOL;
echo max($lista) . PHP_EOL;

$listaNomes = ["Ygor", "Thais", "Vitor", "Emily"];
echo min($listaNomes) . PHP_EOL;
echo max($listaNomes) . PHP_EOL;

$listaCaracteries = ["a", "b", "c", "d", "e"];
echo min($listaCaracteries) . PHP_EOL;
echo max($listaCaracteries) . PHP_EOL;
