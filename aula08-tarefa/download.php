<!DOCTYPE html>
<html lang="en">
<?php

$jsonArquivos = file_get_contents('arquivos.json');
$jsonArquivos = json_decode($jsonArquivos, true);


?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">
  <title>Aula 8 Tarefa</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th>Arquivo</th>
        <th>Link</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($jsonArquivos['arquivos'] as $arquivo) : ?>
        <tr>
          <td><?= $arquivo['fileName'] ?></td>
          <td><a href="<?= $arquivo['link'] ?>"> <?= $arquivo['link'] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>