<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">

  <title>Confirmação de Inscrição</title>
</head>

<body>
  <?php
  $nomeCompleto = $_REQUEST['nomeCompleto'];
  $email = $_REQUEST['email'];
  $dataNascimento = $_REQUEST['dataNascimento'];
  $hobbies = $_REQUEST['hobbies'];
  $senha = $_REQUEST['senha'];
  if (!$nomeCompleto && !$email && !$dataNascimento && !$hobbies && !$senha)
    header('Location:inscricao_usuarios.php');

  $idade =  date('Y') - date("Y", strtotime($dataNascimento));
  $aniversario = date("md", strtotime($dataNascimento)) > date('md') ? 1 : 0;
  $idade = $idade - $aniversario;

  ?>

  <p> Agradecemos a sua inscrição, <b><?= $nomeCompleto ?> </b></p>
  <p> Você disse que tem <?= $idade ?> anos. Registramos seu e-mail <b><?= $email ?> </b></p>
  <p> Você disse que possui os seguintes hobbies : </p>
  <ul>
    <?php foreach ($hobbies as $key => $value) : ?>
      <li> <?= $key ?> </li>
    <?php endforeach ?>
  </ul>

  <?php
  $localiza = 'Adoro php, Eu também adoro php!';
  echo 'posição do php: ' . strpos($localiza, 'php');
  ?>
</body>

</html>