<?php
/* Sintaxe para criar uma função no PHP */

/* está funçaõ não retorna nada [: void], quando uma função não retorna nada ela é oque seu bloco de código faz */
function escreve(string $mensagem): void
{
  echo $mensagem . PHP_EOL;
}

$texto = escreve("Texto exibido através de uma função no php.");
echo $texto;
