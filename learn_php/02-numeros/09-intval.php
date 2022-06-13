<?php
/* intval() é uma função que converte um valor númerico para inteiro e arrendonda o número.
Escrever (int)$variavelFloat ou então (integer)$variavelFloat também converte a variavel float para int */

$numeroFloat = 15.8;
$floatConvertido = intval($numeroFloat);

var_dump($floatConvertido);
