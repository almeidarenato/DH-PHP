<?php
$nomeCompleto = $_REQUEST['nomeCompleto'];
$cpf = $_REQUEST['cpf'];
$numCartao = $_REQUEST['numCartao'];
$validade = $_REQUEST['validade'];
$cvv = $_REQUEST['cvv'];
$nomeCurso = $_REQUEST['nomeCurso'];
$precoCurso = $_REQUEST['precoCurso'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading">Compra Realizada com sucesso!</div>
        <div class="panel-body">
          <ul class="list-group">
            <li class='list-group-item'><strong>Nome Curso </strong><?php echo $_REQUEST['nomeCurso']; ?></li>
            <li class='list-group-item'><strong>Preço<?php ?> R$</strong> <?php echo $_REQUEST['precoCurso']; ?></li>
            <li class='list-group-item'><strong>Nome Completo: </strong><?php echo $_REQUEST['nomeCompleto']; ?></li>
          </ul>
          <div class="center">
            <a href="index.php">Voltar para a home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>