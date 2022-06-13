<?php
/* 
O operador <=> é utilizado para fazer comparações combinadas.
- Retorna 0 se os valores de ambos os lados são iguais.
- Retorna 1 se o valor à esquerda é maior.
-Retorna -1 se o valor à direita é maior. 
*/

$spaceship = 1 <=> 1;
echo "O valor do 'spaceship' é $spaceship pois os valores de ambos os lados são iguais." . PHP_EOL;

$spaceship = 2 <=> 1;
echo "O valor do 'spaceship' é $spaceship pois o valor à esquerda é maior." . PHP_EOL;

$spaceship = 1 <=> 2;
echo "O valor do 'spaceship' é $spaceship pois o valor à direita é maior." . PHP_EOL;
