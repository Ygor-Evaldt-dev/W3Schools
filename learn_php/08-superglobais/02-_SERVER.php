<?php
/* $_SERVER é uma variável super global do PHP que contém informações sobre cabeçalhos, caminhos e localizações de script. */

echo $_SERVER['PHP_SELF']; /* Retorna o nome do arquivo do script atualmente em execução */
echo "<br>";
echo $_SERVER['SERVER_NAME'];  /* Retorna o nome do servidor host */
echo "<br>";
echo $_SERVER['HTTP_HOST'];  /* Retorna o cabeçalho Host da solicitação atual */
echo "<br>";
echo $_SERVER['HTTP_REFERER'];  /* Retorna o URL completo da página atual (não confiável porque nem todos os user-agents o suportam) */
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];  /*  */
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];  /* Retorna o caminho do script atual */

$_SERVER['REQUEST_METHOD'];  /* retorna o metodo usado no formulário */
