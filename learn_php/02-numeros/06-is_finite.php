<?php
/*  Um valor numérico maior que PHP_FLOAT_MAX é considerado infinito.
'is_finite()' é a função para verificar se um valor numérico é finito: */

$valorNumerico = 50405040;
var_dump(is_finite($valorNumerico));
