<?php
$nomeCompleto = $_REQUEST['nomeCompleto'];
$cpf = $_REQUEST['cpf'];
$numCartao = $_REQUEST['numCartao'];
$validade = $_REQUEST['validade'];
$cvv = $_REQUEST['cvv'];
$nomeCurso = $_REQUEST['nomeCurso'];
$precoCurso = $_REQUEST['precoCurso'];

function validaNome($nom)
{
  return strlen($nom) > 0 && strlen($nom) <= 15;
}

function validaCPF($varcpf)
{
  return strlen($varcpf) == 11;
}

function validarNroCartao($varnumCartao)
{
  return substr($varnumCartao, -4);
}

function validaCVV($varcvv)
{
  return strlen($varcvv) === 3;
}

function validarData($varvalidade)
{
  $dataAtual = date('mm-YYYY');
  return $varvalidade > $dataAtual;
}

function validaCompra($nome, $cpf, $numeroCartao, $cvv, $validade)
{

  $errors = [];

  if (!validaNome($nome)) {

    array_push($errors['nome'] = 'Nome Completo é obrigatório');
  }
  if (!validaCPF($cpf)) {

    array_push($errors['cpf'] = 'CPF inválido');
  }
  if (!validarNroCartao($numeroCartao)) {

    array_push($errors['numCartao'] = 'Número do Cartão é inválido');
  }
  if (!validaCVV($cvv)) {

    array_push($errors['cvv'] = 'CVV é invalido');
  }
  if (!validarData($validade)) {

    array_push($errors['validade'] = 'Validade é invalida');
  }
  return $errors;
}

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
      <?php
      $array_errors = validaCompra($nomeCompleto, $cpf, $numCartao, $cvv, $validade);
      if (count($array_errors) > 0) { ?>
        <div class="panel panel-danger">
          <div class='panel-heading'>
            <span>Preencha seus dados corretamente</span>
          </div>
          <div class="panel-body">
            <ul class="list-group">
              <?php foreach ($array_errors as $key => $value) {
                echo "<li class='list-group-item'> $key : $value</li><br>";
              } ?>

            </ul>
            <div class="center">
              <a href="index.php">Volte para Home</a>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="panel panel-primary">
          <div class="panel-heading">Compra Realizada com sucesso!</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class=' list - group - item '><strong>Nome Curso </strong><?php echo $_REQUEST[' nomeCurso ']; ?></li>
              <li class=' list - group - item '><strong>Preço<?php ?> R$</strong> <?php echo $_REQUEST[' precoCurso ']; ?></li>
              <li class=' list - group - item '><strong>Nome Completo: </strong><?php echo $_REQUEST[' nomeCompleto']; ?></li>
            </ul>
            <div class="center">
              <a href="index.php">Voltar para a home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</body>

</html>