<?php
require_once("../config/conn.php");

$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];

$sql = "SELECT * FROM usuarios WHERE email = :email";

$query = $db->prepare($sql);

$query->execute([
  ":email" => $email
]);

// Se não encontrar usuário retornamos erro
$usuario = $query->fetch(PDO::FETCH_ASSOC);
if (!$usuario) {
  $erro = true;
  echo 'erro usuario não encontrado';
} else {
  // se a senha não conferir com a do banco de dados
  if (!password_verify($senha, $usuario["senha"])) {
    $erro = true;
  } else {
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $usuario["nome"];
    $_SESSION['nivel_acesso'] = $usuario["nivel_acesso"];
    echo $_SESSION['logado'];
    echo $_SESSION['nome'];
    echo $_SESSION['nivel_acesso'];
    header("Location: ../indexLogados.php");
  }

  if (isset($erro) && $erro === true) {
    echo "Usuário ou senha inválidos";
  }
}
