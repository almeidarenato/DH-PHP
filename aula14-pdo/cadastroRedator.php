<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/head.php"); ?>

<body>
  <?php require_once("inc/header.php") ?>

  <div class="container">
    <div class="mt-5">
      <form action="utils/salvarCadastroRedator.php" method="POST">
        <h1>Preencha o formulário para cadastrar um redator</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum reiciendis eveniet, similique obcaecati qui corporis dolore quisquam placeat incidunt facilis? Facere aspernatur dolorum vitae sequi ut at doloremque, quia aut.</p>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="input-nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="input-nome" placeholder="Insira o seu nome">
          </div>
          <div class="form-group col-md-12">
            <label for="input-email">E-mail</label>
            <input type="text" class="form-control" name="email" id="input-email" placeholder="Email@exemplo.com">
          </div>
          <div class="form-group col-md-12">
            <label for="input-senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="input-senha" placeholder='Insira sua senha'>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
  <br>

  <?php include_once('inc/footer.php'); ?>

</body>

</html>