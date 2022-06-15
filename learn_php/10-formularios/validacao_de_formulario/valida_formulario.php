<?php

function validaDadosFormulario($nome, $email, $sexo): void
{
  if (empty($nome)) {
    echo "<p class='text-danger'>O campo nome é obrigatório</p>";
    return;
  }

  if (empty($email)) {
    echo "<p class='text-danger'>O campo e-mail é obrigatório</p>";
    return;
  }

  if (empty($website)) {
    $website = "Não informado";
  }

  if (empty($mensagem)) {
    $mensagem = "Nenhuma mensagem";
  }

  if (empty($sexo)) {
    echo "<p class='text-danger'>O campo sexo é obrigatório</p>";
    return;
  }

  // function testaInput($input)
  // {
  //   $input = trim($input); /* Retirando caracteries desnecessários */
  //   $input = stripslashes($input); /* Removendo barras invertidas '\' */
  //   $input = htmlspecialchars($input); /* convertendo caracteres especiais em entidades HTML */
  //   return $input;
  // }

  // $nome = testaInput($nome);
  // $email = testaInput($email);
  // $website = testaInput($website);
  // $mensagem = testaInput($mensagem);
  // $sexo = testaInput($sexo);
}
