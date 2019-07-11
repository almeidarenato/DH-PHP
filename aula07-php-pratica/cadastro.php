<?php
require "utils/funcoesLogin.php";
include "inc/head.php";

if ($_REQUEST) {
  $nome = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];
  $confirmarSenha = $_REQUEST['confirmarSenha'];


  if ($senha != $confirmarSenha) {
    $erro = "Senha incompativeis! Revise por favor...";
  } else {
    $novoUsuario = [
      "nome" => $nome,
      "email" => $email,
      "senha" => $senha
    ];

    $cadastrou = cadastrarUsuario($novoUsuario);
  }
}
?>
<div class="page-center">
  <h1>Cadastre-se</h1>
  <?php
  if (isset($erro)) : ?>
    <div class="alert alert-danger" role='alert'>
      <?= $erro ?>
    </div>
  <?php elseif (isset($cadastrou)) : ?>
    <div class="alert alert-success" role="alert">
      <span>Usuário cadastrado com sucesso.</span>
    </div>
  <?php endif ?>
  <form action="cadastro.php" method="post" class="col-md-7">
    <div class="col-md-12">
      <label for="exampleInputNome">Nome</label>
      <input type="text" name="nome" class="form-control" id="exampleInputNome" placeholder="Insira seu nome">
    </div>
    <div class="col-md-12">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
    </div>
    <div class="col-md-12">
      <label for="exampleInputSenha">Senha</label>
      <input type="password" name="senha" class="form-control" id="exampleInputSenha" placeholder="Insira sua senha">
    </div>
    <div class="col-md-12">
      <label for="exampleInputConfirmar">Confirme sua senha</label>
      <input type="password" name="confirmarSenha" class="form-control" id="exampleInputConfirmar" placeholder="Confirme sua senha">
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a class="col-md-offset-9" href="login.php">Fazer login!</a>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>