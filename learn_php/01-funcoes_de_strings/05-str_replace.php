<?php
/* A função str_replace() substituí um texto (sequência de caracteries) de uma string */

$string = "Texto para utilização do método str_replace()";
$novaString = str_replace("utilização", "demostração", $string);

echo $novaString;
