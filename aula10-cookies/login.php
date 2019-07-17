<?php
require 'utils/funcoesLogin.php';
include 'inc/head.php';

if ($_REQUEST) {
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];
  $preencher = $_REQUEST['lembrarme'];
  $array = logarUsuario($email, $senha);
  if ($array) {
    if ($preencher) {
      setcookie("email", $email, time() + 3600);
      setcookie("senha", $senha, time() + 3600);
    }
    session_start();
    $_SESSION["logado"] = true;
    $_SESSION["email"] = $email;
    $_SESSION['nome'] = $array['nome'];
    $_SESSION['nivelAcesso'] = $array['nivelAcesso'];
  }
}
?>
<div class="page-center">
  <h1>Login</h1>
  <?php if (isset($array) && isset($erro)) : ?>
    <div class='alert alert-danger' role='alert'>
      <span><?= $erro ?></span>
    </div>
  <?php elseif (isset($array) && $array) : ?>
    <?php
    header('Location: index.php'); ?>
  <?php endif ?>
  <form action="login.php" method="post" class="col-md-7">
    <div class="col-md-12">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email" value=<?= $_COOKIE['email']; ?>>
    </div>
    <div class="col-md-12">
      <label for="exampleInputSenha">Senha</label>
      <input type="password" name="senha" class="form-control" id="exampleInputSenha" placeholder="Insira sua senha" value='<?= $_COOKIE['senha']; ?>'>
    </div>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" name="lembrarme" class="custom-control-input">
      <label for="lembrarme" class="custom-control-label">Lembrar meu nome de usuário e senha</label>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Logar</button>
      <a class="col-md-offset-9" href="cadastro.php">Fazer cadastro!</a>
    </div>

  </form>
</div>
<?php include 'inc/footer.php'; ?>