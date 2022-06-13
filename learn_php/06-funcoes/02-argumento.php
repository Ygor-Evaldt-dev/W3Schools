<?php
/*
As informações podem ser passadas para funções por meio de argumentos. Um argumento é como uma variável.
Os argumentos são especificados após o nome da função, dentro dos parênteses. Você pode adicionar quantos argumentos quiser, basta separá-los com uma vírgula.
*/

function nomeCompleto(string $nome, string $sobrenome): string
{
  return "$nome $sobrenome" . PHP_EOL;
}

echo "Meu nome completo é: " . nomeCompleto("Ygor", "Evaldt");
