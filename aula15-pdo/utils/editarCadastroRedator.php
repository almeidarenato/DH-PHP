<?php
require_once("../config/conn.php");

$id = $_REQUEST["id"];
$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];

if ($_REQUEST["senha"]) {

  $senha = $_REQUEST["senha"];
  $sql = "UPDATE usuarios SET nome = :nome , email = :email, senha = :senha WHERE id= :id";
  $query = $db->prepare($sql);

  $salvou = $query->execute([
    ":id" => $id,
    ":nome" => $nome,
    ":email" => $email,
    ":senha" => password_hash($senha, PASSWORD_DEFAULT),
  ]);
} else {

  $sql = "UPDATE usuarios SET nome = :nome , email = :email WHERE id= :id";

  $query = $db->prepare($sql);

  $salvou = $query->execute([
    ":id" => $id,
    ":nome" => $nome,
    ":email" => $email
  ]);
}

if (isset($salvou) && $salvou == true) {
  echo "Usuario Editado com sucesso";
} else {
  echo "Erro ao editar usuário";
}
