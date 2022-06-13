<?php
/* Podemos definir valores padrões para o argumento das funções no PHP, caso a função não receba um argumento, ele automaticamente sera o valor padão */

function area(float $altura = 10, float $largura = 10): float
{
  return $altura * $largura;
}
/* Parametro automatico */
var_dump(area());

/* Parametro definido pelo usuário */
var_dump(area(20, 10));
