<?php
/* A função is_numeric() Retorna true caso a variavel seja numérica ou string númerica, e false se não for */

$variavel = 15;
$variavel2 = "15"; //string númerica
$variavel3 = "Nome qualquer";

var_dump(is_numeric($variavel));
var_dump(is_numeric($variavel2));
var_dump(is_numeric($variavel3));
