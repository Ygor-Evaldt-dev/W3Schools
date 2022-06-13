<?php
/* Por padrão no php, as constantes são globais, ou seja, podem ser usadas dentro de funções mesmo que sejam declaradas fora do escopo da função */

define('constantDeclarada', 100);
var_dump(constantDeclarada);

function exibeConstant(): void
{
  echo constantDeclarada;
}

$constante = exibeConstant();
echo $constante;
