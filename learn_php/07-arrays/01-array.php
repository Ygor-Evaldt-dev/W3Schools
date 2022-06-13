<?php
/* formas de se declarar um array no PHP */

echo "Lista de compras" . PHP_EOL;
$listaDeCompras = array('abacaxi', 'pera', 'maça', 'arroz', 'feijão', 'abacaxi');
var_dump($listaDeCompras);

echo "Lista de idades" . PHP_EOL;
$listaDeIdades = [10, 20, 25, 23, 18, 54, 52, 74, 78];
var_dump($listaDeIdades);


/* Array associativo */
echo "lista de preços" . PHP_EOL;
$listaDePreços = [
  'abacaxi' => 10.90,
  'pera' => 4.50,
  'maça' => 2.30,
  'arrox' => 18.90,
  'feijao' => 15.35,
  'abacaxi' => 10.30
];

foreach ($listaDePreços as $indice => $valor) {
  echo "$indice = $$valor" .  PHP_EOL;
}
