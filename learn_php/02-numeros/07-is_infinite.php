<?php
/*  Um valor numérico maior que PHP_FLOAT_MAX é considerado infinito.
'is_infinite()' é a função para verificar se um valor numérico é infinito: */

$valorNumerico = PHP_FLOAT_MAX * 2;
var_dump(is_infinite($valorNumerico));
