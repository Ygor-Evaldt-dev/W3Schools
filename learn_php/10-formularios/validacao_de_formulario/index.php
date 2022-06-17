<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php
  require_once 'head.php';
  ?>
  <title>
    Home
  </title>
</head>

<body>
  <header class="p-4 bg-success mb-5">
    <h1 class="text-white text-center">
      Validação de formulários
    </h1>
  </header>
  <section class="container mb-4 w-50">
    <section class="mb-4">
      <h3>
        Digite os dados para validação
      </h3>
    </section>
    <form action="confirmacao_envio.php" method="POST">
      <div class="mb-4">
        <label for="nome">Nome: <span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="nome" id="nome" value="<?php if (isset($_POST['nome'])) echo $_POST['nome']; ?>">
      </div>
      <div class="mb-4">
        <label for="email">E-mail: <span class="text-danger">*</span></label>
        <input class="form-control" type="mail" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
      </div>
      <div class="mb-4">
        <label for="website">Website: </label>
        <input class="form-control" type="url" name="website" id="website" value="<?php if (isset($_POST['website'])) echo $_POST['website']; ?>">
      </div>
      <div class="mb-4">
        <label for="mensagem">Mensagem: </label>
        <textarea class="form-control" rows="5" name="mensagem" id="mensagem" value="<?php if (isset($_POST['mensagem'])) echo $_POST['mensagem']; ?>"></textarea>
      </div>
      <div class="form-radio mb-3">
        <label for="genero" class="form-label">Genero: <span class="text-danger">*</span></label>
        <div class="mb-4">
          <input class="form-check-input" type="radio" name="genero" value="Masculino"> Masculino
          <input class="form-check-input" type="radio" name="genero" value="Feminino"> Feminino
          <input class="form-check-input" type="radio" name="genero" value="Outro"> Outro
        </div>
        <?php
        $genero = "";
        if (isset($_POST['genero'])) {
          $genero = $_POST['genero'];
        }
        ?>
      </div>
      <div class="text-end">
        <button class="btn btn-success" type="submit">Enviar</button>
      </div>
    </form>
    <?php
    require_once("src/valida_formulario.php");
    if (isset($_POST['nome'], $_POST['email'], $_POST['website'], $_POST['mensagem'], $genero)) {
      validaDadosFormulario($_POST['nome'], $_POST['email'], $_POST['website'], $_POST['mensagem'], $genero);
    }
    ?>
  </section>
</body>

</html>