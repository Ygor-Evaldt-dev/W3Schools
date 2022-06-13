<?php
/* asort() ordena arrays associativos em ordem crescente, de acordo com o valor */

$arrayAssociativo = [
  'dois' => 2,
  'um' => 1,
  'quatro' => 4,
  'tres' => 3,
  'cinco' => 5
];

asort($arrayAssociativo);
var_dump($arrayAssociativo);
