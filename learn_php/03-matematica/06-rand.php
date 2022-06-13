<?php
/* A função 'rand() gera um número inteiro aleatório qualquer, você também pode controlar o range do número aleatorio gerado com a sintax:
'rand(min, max)' */

$numeroAleatorio = rand();
echo "numero aleatório qualquer: $numeroAleatorio" . PHP_EOL;

$numeroAleatorioControlado = rand(2, 100);
echo "numero aleatório qualquer: $numeroAleatorioControlado" . PHP_EOL;
