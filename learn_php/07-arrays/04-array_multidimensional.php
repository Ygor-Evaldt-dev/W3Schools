<?php

echo "Mercados" . PHP_EOL;
$mercados = [
  'ofertao' => [
    'abacaxi' => 10.90,
    'pera' => 4.50,
    'maça' => 2.30,
    'arroz' => 18.90,
    'feijao' => 15.35
  ],
  'super_centro' => [
    'abacaxi' => 10.90,
    'pera' => 4.50,
    'maça' => 2.30,
    'arroz' => 18.90,
    'feijao' => 15.35
  ],
  'super_da_praia' => [
    'abacaxi' => 10.90,
    'pera' => 4.50,
    'maça' => 2.30,
    'arroz' => 18.90,
    'feijao' => 15.35
  ]
];

echo "Percorrendo o array multdimensional 'mercados' com foreach" . PHP_EOL;
foreach ($mercados as $mercado => $produto) {
  echo "$mercado" . PHP_EOL;
  echo "Abacaxi - $" . "{$produto['abacaxi']}" . PHP_EOL;
  echo "Pera - $" . "{$produto['pera']}" . PHP_EOL;
  echo "Maça - $" . "{$produto['maça']}" . PHP_EOL;
  echo "Arroz - $" . "{$produto['arroz']}" . PHP_EOL;
  echo "Feijão - $" . "{$produto['feijao']}" . PHP_EOL . PHP_EOL;
}
