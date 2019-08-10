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
} else {
  // se a senha não conferir com a do banco de dados
  if (password_verify($senha, $usuario["senha"], PASSWORD_DEFAULT)) {
    $erro = true;
  } else {
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION["nome"] = $usuario["nome"];
    $_SESSION["nivel_acesso"] = $usuario["nivel_acesso"];
    header("Location: ../index.php");
  }

  if (isset($erro) && $erro === true) {
    echo "Usuário ou senha inválidos";
  }
}
