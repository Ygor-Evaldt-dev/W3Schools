<?php
/* $_POST é uma variável super global PHP que é usada para coletar dados de formulário após enviar um formulário HTML com method="post". $_POST também é amplamente usado para passar variáveis. */

/* Pegando os dados informados */
if (isset($_POST['nome'], $_POST['telefone'], $_POST['email'])) {
  $nome = $_REQUEST['nome'];
  $telefone = $_REQUEST['telefone'];
  $email = $_REQUEST['email'];

  if (empty($nome)) {
    $nome = "Não informado";
  }
  if (empty($telefone)) {
    $telefone = "Não informado";
  }
  if (empty($email)) {
    $email = "Não informado";
  }
}

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

  <title>$_POST</title>
</head>

<body>
  <section class="container-fluid bg-dark mb-4 p-3">
    <h1 class="text-center text-white">
      $_POST
    </h1>
  </section>
  <section class="container">
    <section class="mt-5 mb-5">
      <h2>
        Deixe seus dados para contato
      </h2>
    </section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="mb-4">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="<?php if (isset($_POST['nome'])) echo $_POST['nome'] ?>">
      </div>
      <div class="mb-4">
        <label for="telefone">Telefone:</label>
        <input class="form-control" type="text" name="telefone" id="telefone" value="<?php if (isset($_POST['telefone'])) echo $_POST['telefone'] ?>">
      </div>
      <div class="mb-4">
        <label for="email">E-mail:</label>
        <input class="form-control" type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">
      </div>
      <div class="mb-4 text-end">
        <button class="btn btn-secondary" type="submit" name="enviar">Enviar</button>
      </div>
    </form>
  </section>
  <section class="container mb-5">
    <!-- mostrando os dados informados na página -->
    <?php if (isset($_POST['nome'], $_POST['telefone'], $_POST['email'])) { ?>
      <h3 class="mb-4">
        Dados informados:
      </h3>
      <p><strong>Nome: </strong><?= $nome ?></p>
      <p><strong>Telefone: </strong><?= $telefone ?></p>
      <p><strong>E-mail: </strong><?= $email ?></p>
    <?php } ?>
  </section>
</body>

</html>