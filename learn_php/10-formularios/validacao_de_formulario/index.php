<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>Home</title>
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
    <form action="" method="POST">
      <div class="mb-4">
        <label for="nome">Nome: <span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="nome" id="nome">
      </div>
      <div class="mb-4">
        <label for="email">E-mail: <span class="text-danger">*</span></label>
        <input class="form-control" type="mail" name="email" id="email">
      </div>
      <div class="mb-4">
        <label for="website">Website: </label>
        <input class="form-control" type="url" name="website" id="website">
      </div>
      <div class="mb-4">
        <label for="mensagem">Mensagem: </label>
        <textarea class="form-control" rows="5" name="mensagem" id="mensagem"></textarea>
      </div>
      <div class="form-radio mb-3">
        <label for="genero" class="form-label">Genero: <span class="text-danger">*</span></label>
        <div class="mb-4">
          <input class="form-check-input" type="radio" name="genero" value="Masculino"> Masculino
          <input class="form-check-input" type="radio" name="genero" value="Feminino"> Feminino
          <input class="form-check-input" type="radio" name="genero" value="Outro"> Outro
        </div>
        <?php
        $genero = "O campo genero é obrigatório";
        if (isset($_POST['genero'])) {
          $genero = $_POST['genero'];
        }
        ?>
      </div>
      <div class="mb-5 text-end">
        <button class="btn btn-success" type="submit">Enviar</button>
      </div>
    </form>
    <?php
    require_once("valida_formulario.php");
    if (isset($_POST['nome'], $_POST['email'], $_POST['website'], $_POST['mensagem'], $genero)) {
      echo "deu certo";
    }
    ?>
  </section>
</body>

</html>