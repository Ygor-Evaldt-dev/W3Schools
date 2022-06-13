<?php
/* arsort()- ordena arrays associativos em ordem decrescente, de acordo com o valor */

$arrayAssociativo = [
  'dois' => 2,
  'um' => 1,
  'quatro' => 4,
  'tres' => 3,
  'cinco' => 5
];

arsort($arrayAssociativo);
var_dump($arrayAssociativo);
