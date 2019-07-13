<?php
require "utils/funcoesLogin.php";
include "inc/head.php";

if ($_REQUEST) {
  $nome = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];
  $confirmarSenha = $_REQUEST['confirmarSenha'];

  if ($_FILES) {
    if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) //Verifica se não houve erros de requisição
    {
      $nomeImagem = $_FILES["foto"]["name"];
      $nomeTemporario = $_FILES["foto"]["tmp_name"];

      $pastaRaiz = dirname(__FILE__) . '/';
      $caminhoPastas = 'assets/img/uploads/';

      $caminhoCompleto = $pastaRaiz . $caminhoPastas . $nomeImagem;
      move_uploaded_file($nomeTemporario, $caminhoCompleto); // transfere o arquivo para  o caminhoPastas designado.
    }
  }
  if ($senha != $confirmarSenha) {
    $erro = "Senha incompativeis! Revise por favor...";
  } else {
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    $novoUsuario = [
      "nome" => $nome,
      "email" => $email,
      "senha" => $senhaCriptografada,
      "imagem" => $caminhoPastas . $nomeImagem
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
  <form action="cadastro.php" method="post" class="col-md-7" enctype="multipart/form-data">
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
    <!-- input para fazer upload de imagens  adicionado no form o enctype="multipart/form-data" -->
    <div class="col-md-12">
      <label for="exampleFoto">Escolha uma foto do seu perfil:</label>
      <input type="file" name="foto" id="exampleFoto" class='form-control'>
    </div>

    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a class="col-md-offset-9" href="login.php">Fazer login!</a>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>