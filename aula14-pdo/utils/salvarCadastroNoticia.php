<?php
require_once("../config/conn.php");

$titulo = $_REQUEST["titulo"];
$descricao = $_REQUEST["descricao"];

if ($_FILES) {
  if ($_FILES["imagem"]["error"] == UPLOAD_ERR_OK) {
    $nomeImg = $_FILES["imagem"]["name"];
    $nomeTemp = $_FILES["imagem"]["tmp_name"];

    // caminho atual até a pasta;
    $caminho = dirname(__FILE__);
    $caminhoDesejado = "assets/img/uploads/";
    $caminhoDefinitivo = str_replace("utils", $caminhoDesejado, $caminho);
    $caminhoCompleto = $caminhoDefinitivo . $nomeImg;
    $moveu = move_uploaded_file($nomeTemp, $caminhoCompleto);

    $sql = "INSERT INTO noticias (titulo,descricao,imagem,data_criacao)
    values (:titulo,:descricao,:imagem,NOW())";

    $query = $db->prepare($sql);
    $salvou = $query->execute([
      ":titulo" => $titulo,
      ":descricao" => $descricao,
      ":imagem" => $caminhoDesejado . $nomeImg
    ]);

    if (isset($salvou) && $salvou) {
      echo "Noticia cadastrada com sucesso";
    } else {
      echo "Falha ao processar cadastro de notícia";
    }
  }
}
