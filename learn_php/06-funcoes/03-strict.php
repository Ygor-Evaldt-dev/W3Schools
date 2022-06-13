<?php

declare(strict_types=1);
/* O php associa automaticamente um tipo de dado a uma variável, depois do PHP 7 podemos declarar o tipo da váriavel, a declaração "strict" faz com que o PHP lance um erro fatal caso o tipo da váriavel não corresponda ao seu valor */


function soma(int $valor1, int $valor2): int
{
  return $valor1 + $valor2;
}

echo "O resultado da soma é: " . soma(1, 1);

/* ERRO strict_types */
// echo "O resultado da soma é: " . soma(1, '1');
