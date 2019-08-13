<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/head.php"); ?>


<body>
  <?php

  if ($_SESSION) {
    $logado = $_SESSION["logado"];
    $nivel_acesso = $_SESSION["nivel_acesso"];

    if (!$logado) {
      header("Location: index.php");
    }

    if ($nivel_acesso == 1) {
      $active = "admin";
    } else {
      $active = "redator";
    }
    exit;
  }
  ?>
  <?php require_once("inc/header.php") ?>
  <div class="container">
    <div class="mt-5">
      <form action="utils/salvarCadastroNoticia.php" method="POST" enctype="multipart/form-data" style="margin-bottom:20px;">
        <h1>Preencha o formulário para cadastrar um notícia</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum reiciendis eveniet, similique obcaecati qui corporis dolore quisquam placeat incidunt facilis? Facere aspernatur dolorum vitae sequi ut at doloremque, quia aut.</p>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="input-titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="input-titulo" placeholder="Insira o título">
          </div>
          <div class="form-group col-md-12">
            <label for="input-imagem">Imagem</label>
            <input type="file" class="form-control" name="imagem" id="input-imagem">
          </div>
          <div class="form-group col-md-12">
            <label for="input-descricao">Descrição</label>
            <textarea class="form-control" name="descricao" id="input-descricao" placeholder="Insira a descrição da sua notícia..."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
  <?php require_once('inc/footer.php'); ?>
</body>

</html>