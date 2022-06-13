<?php
/* krsort()- ordena arrays associativos em ordem decrescente, de acordo com a chave */

$matrizAssociativa = [
  'abacate' => 'A',
  'banana' => 'A',
  'acerola' => 'A',
  'uva' => 'U',
  'pera' => 'P',
  'abacate' => 'A',
  'bergamota' => 'U'
];
krsort($matrizAssociativa);
var_dump($matrizAssociativa);
