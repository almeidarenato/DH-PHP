<?php
$jsonName = 'arquivos.json';
function cadastrarArquivo($arquivo)
{
  //pega o arquivo Json arquivos.json
  global $jsonName;
  //coleta as informações 
  $jsonArquivos = file_get_contents($jsonName);
  //decodifica arquivo
  $arrayArquivos = json_decode($jsonArquivos, true);
  //adiciona novo link no arquivo json
  array_push($arrayArquivos['arquivos'], $arquivo);
  // codifica novamente o arquivo json
  $jsonArquivos = json_encode($arrayArquivos, JSON_UNESCAPED_SLASHES);

  $cadastrou = file_put_contents($jsonName, $jsonArquivos);

  //retorna o arquivo.
  return $cadastrou;
}

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
    $novoArquivo = [
      "fileName" => $nomeArquivo,
      "link" => $caminhoPastas . $nomeArquivo
    ];

    $cadastrou = cadastrarArquivo($novoArquivo);
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