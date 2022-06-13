<?php
/* Qaundo passamos uma váriavel como argumento para uma função, essa função nos retorna uma cópia da váriavel com um novo valor, podemos passar esse argumento como referência, quando passamos variaveis como argumento para uma função como referencia, a função irá alterar a váriavel que foi passada e não retornara apenas uma cópia */

echo "Passando argumento" . PHP_EOL;
$numero = 10;
function adiciona2(int $variavel): int
{
  return $variavel += 2;
}
var_dump(adiciona2($numero));
var_dump($numero);


echo "Passando argumento por referência" . PHP_EOL;
$valor = 10;
function adiciona3(int &$variavel): int
{
  return $variavel += 2;
}
var_dump(adiciona3($valor));
var_dump($valor);
