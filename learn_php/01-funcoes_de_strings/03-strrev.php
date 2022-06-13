<?php
/* A função 'strrev()' reverte uma string*/
/* função pra reverter uma string com padrão UTF-8 */
function mb_strrev($str)
{
  preg_match_all('/./us', $str, $ar);
  return join('', array_reverse($ar[0]));
}

$string = "Texto para reverção";
$stringRevertida = mb_strrev($string);
echo "A váriavel 'string' revertida fica: $stringRevertida";
