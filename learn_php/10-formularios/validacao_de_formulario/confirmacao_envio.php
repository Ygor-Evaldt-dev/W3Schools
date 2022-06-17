<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$website = $_POST['website'];
$mensagem = $_POST['mensagem'];
$genero = $_POST['genero'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php
  require_once 'head.php';
  ?>
  <title>Confirmação</title>
</head>

<body>
  <header class="container-fluid border p-4 mb-5" style="background-color: #e6e6e6;">
    <h1 class="text-center text-success text-capitalize">
      confirmação de envio
    </h1>
  </header>
  <main>
    <section>
      <h2 class="text-center">
        Seus dados foram enviados com sucesso!
      </h2>
    </section>
    <p><strong>Nome: </strong><?php echo $nome ?></p>
  </main>
</body>

</html>