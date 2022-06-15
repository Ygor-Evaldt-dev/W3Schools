<?php
/* 
- PHP $_GET é uma variável super global PHP que é usada para coletar dados de formulário após enviar um formulário HTML com method="get".
- $_GET também pode coletar dados enviados na URL. 
*/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>$_GET</title>
</head>

<body>
  <div class="d-block m-5">
    <a class="p-2 pt-1 pb-1 bg-dark text-white rounded" href="05-_GET.php?nome=Ygor&sobrenome=Evaldt">Teste $GET</a>
  </div>
  <?php if (!empty($_GET)) { ?>
    <div class="m-5">
      <p><strong>Nome: </strong><?= $_GET['nome'] ?></p>
      <p><strong>Sobrenome: </strong><?= $_GET['sobrenome'] ?></p>
    </div>
  <?php } ?>
</body>

</html>