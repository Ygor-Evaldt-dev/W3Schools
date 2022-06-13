<?php
/* Existem duas maneiras de criar arrays indexados */

echo "Exemplo com indice automatico:" . PHP_EOL;
$matriz = array("Fox", "golf", "polo", "voyage", "saveiro");
echo $matriz[0] . PHP_EOL;
echo $matriz[1] . PHP_EOL;
echo $matriz[2] . PHP_EOL;
echo $matriz[3] . PHP_EOL;
echo $matriz[4] . PHP_EOL . PHP_EOL;

echo "Exibindo itens do Array com loop:" . PHP_EOL;
for ($i = 0; $i < count($matriz); $i++) {
  echo $matriz[$i] . PHP_EOL;
}
