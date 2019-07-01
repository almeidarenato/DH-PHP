<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Aula 01 - PHP Hello World</title>
</head>

<body>
  <section class="container">
    <article class='row'>
      <?php
      $olaMundo = '-- Hello World PHP --  ';

      ?>
    </article>
    <div class="jumbotron">
      <h1 class="display-3"><?php echo $olaMundo ?></h1>
    </div>
    <?php
    $itensLista = ['Home', 'Sobre Nós', 'Contato', 'Fale Conosco'];
    ?>
    <ul class="d-flex flex-row justify-content-around list-group">
      <li class='list-group-item'><?php echo $itensLista[0]; ?></li>
      <li class='list-group-item'><?php echo $itensLista[1]; ?></li>
      <li class='list-group-item'><?php echo $itensLista[2]; ?></li>
      <li class='list-group-item'><?php echo $itensLista[3]; ?></li>
    </ul>
    <hr>
    <h2>Operações Matemáticas</h2>
    <?php
    $numero1 = 30;
    $numero2 = 2;

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;
    $resto = $numero1 % $numero2;
    ?>
    <p>O resultado da <a href="#" class="badge badge-pill badge-primary">soma</a> entre <?php echo "$numero1  e  $numero2 é $soma";  ?> </p>
    <p>O resultado da <a href="#" class="badge badge-pill badge-primary">subtração</a> entre <?php echo "$numero1  e  $numero2 é $subtracao"; ?> </p>
    <p>O resultado da <a href="#" class="badge badge-pill badge-primary">multiplicação</a> entre <?php echo "$numero1  e  $numero2 é $multiplicacao" ?> </p>
    <p>O resultado da <a href="#" class="badge badge-pill badge-primary">divisão</a> entre <?php echo "$numero1  e  $numero2 é $divisao";  ?> </p>
    <p>O resultado do <a href="#" class="badge badge-pill badge-primary">resto</a> entre <?php echo "$numero1  e  $numero2 é $resto";  ?> </p>
  </section>
</body>

</html>