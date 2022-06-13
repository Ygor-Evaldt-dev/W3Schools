<?php
/* A função 'strpos() encontra o primeiro caracter de um texto(sequência de caracteries) dentro de uma string. se a sequência de caracteries não foi encontrada a função retorna o boolean FALSE' */

$string = "Texto de exemplo para a função 'strpos()'";
echo 'O primeiro caracter da sequência de caracteries "exemplo" está na posição ' . (mb_strpos($string, "exemplo")) . ' de $string' . PHP_EOL;
