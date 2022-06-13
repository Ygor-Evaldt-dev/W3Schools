<?php
/* PHP $_REQUEST é uma variável super global do PHP que é usada para coletar dados após o envio de um formulário HTML. */

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

  <title>$_REQUEST</title>
</head>

<body>
  <header class="container-fluid mt-4 mb-5">
    <h1 class="text-center">
      Exemplo da variável superglobal $_REQUEST.
    </h1>
  </header>
  <main class="container">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="mb-4">
        <label for="nome">Nome: </label>
        <input class="form-control" type="text" name="nome" id="nome">
      </div>
      <div class="text-end">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nome = $_REQUEST['nome'];
      if (empty($nome)) {
        echo "<p><strong>Nome: </strong>Não preenchido.</p>";
      } else {
        if (mb_strlen($nome) <= 2 || mb_strlen($nome) > 100) {
          echo "<p style='color'>Nome inválido";
        }
        echo "<p><strong>Nome: </strong>$nome.</p>";
      }
    }
    ?>
  </main>

</body>

</html>