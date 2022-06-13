<?php
/* 
Operadores comuns do php [+][-][*][/][%][**]
 */
function doisEnters(): void
{
  echo PHP_EOL . PHP_EOL;
}

function calcula(int $numero1, string $operacao, int $numero2): int
{
  switch ($operacao) {
    case '+':
      return $numero1 + $numero2;
      break;
    case '-':
      return $numero1 - $numero2;
      break;
    case '*':
      return $numero1 * $numero2;
      break;
    case '/':
      return $numero1 / $numero2;
      break;
    case '%':
      return $numero1 % $numero2;
      break;
    case '**':
      return $numero1 ** $numero2;
      break;
  }
}


echo "Operador de adição" . PHP_EOL;
echo calcula(2, '+', 2);
echo doisEnters();

echo "Operador de subtração" . PHP_EOL;
echo calcula(2, '-', 4);
echo doisEnters();

echo "Operador de multiplicação" . PHP_EOL;
echo calcula(4, '*', 4);
echo doisEnters();

echo "Operador de divisão" . PHP_EOL;
echo calcula(10, '/', 2);
echo doisEnters();

echo "Operador resto da divisão [MOD]" . PHP_EOL;
echo calcula(3, '%', 2);
echo doisEnters();

echo "Operador de exponenciação" . PHP_EOL;
echo calcula(3, '**', 3);
echo doisEnters();
