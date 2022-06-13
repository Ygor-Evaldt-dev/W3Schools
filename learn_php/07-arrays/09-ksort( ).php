<?php
/* ksort()- ordena arrays associativos em ordem crescente, de acordo com a chave */

$matrizAssociativa = [
  'abacate' => 'A',
  'banana' => 'A',
  'acerola' => 'A',
  'uva' => 'U',
  'pera' => 'P',
  'abacate' => 'A',
  'bergamota' => 'U'
];
ksort($matrizAssociativa);
var_dump($matrizAssociativa);
