<?php
require_once("../config/conn.php");

$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];
$nivel_acesso = 0;

$sql = "INSERT INTO usuarios (nome, email, senha,nivel_acesso) VALUES (:nome, :email, :senha,:nivel_acesso)";

$query = $db->prepare($sql);

$salvou = $query->execute([
  ":nome" => $nome,
  ":email" => $email,
  ":senha" => password_hash($senha, PASSWORD_DEFAULT),
  ":nivel_acesso" => $nivel_acesso
]);

if (isset($salvou) && $salvou == true) {
  echo "Usuario Cadastrado com sucesso";
} else {
  echo "Erro ao cadastrar usuário";
}
