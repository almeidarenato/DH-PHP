<?php

if ($_FILES) {
  if ($_FILES["arquivo"]["error"] == UPLOAD_ERR_OK) {
    $nomeArquivo = $_FILES['arquivo']['name'];
    $nomeArquivoTemp = $_FILES['arquivo']['tmp_name'];


    $pastaRaiz = dirname(__FILE__) . '/';
    $caminhoPastas = 'uploads/';
    $caminhoCompleto = $pastaRaiz . $caminhoPastas . $nomeArquivo;
    if (file_exists($caminhoCompleto))
      echo 'Arquivo já existe';

    move_uploaded_file($nomeArquivoTemp, $caminhoCompleto);
  } else {
    echo "Erro de Upload";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">

  <title>Aula 08 - Tarefa</title>
</head>

<body>
  <form action="upload.php" method="post" enctype='multipart/form-data'>
    <label for="arquivo">Adicione o arquivo</label><input type="file" name="arquivo" id="arquivo">
    <button type="submit">Enviar</button>
  </form>
</body>

</html>