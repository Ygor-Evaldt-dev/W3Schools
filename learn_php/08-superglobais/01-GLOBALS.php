<?php
/* $GLOBALS é uma variável super global do PHP que é usada para acessar variáveis ​​globais de qualquer lugar no script PHP (também de dentro de funções ou métodos). */

$variavelX = "variável X";
$variavelY = "variável Y";

function teste(): void
{
  $GLOBALS['variavelZ'] = $GLOBALS['variavelX'] . " - " . $GLOBALS['variavelY'];
}

teste();
echo $GLOBALS['variavelZ'];
