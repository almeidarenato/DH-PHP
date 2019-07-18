<?php
require_once("classes/quadrado.php");
if ($_REQUEST) {
  $ladoA = $_REQUEST['ladoA'];
  $ladoB = $_REQUEST['ladoB'];

  $quadrado = new Quadrado();
  $quadrado->ladoA = $ladoA;
  $quadrado->ladoB = $ladoB;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Digital House</title>
</head>

<body>
  <form class='' action='quadrado_form.php' method='post'>
    <div class=" form-row">
      <div class="form-group col-md-12">
        <div class="col-md-4">
          <label for="ladoA">Lado A</label>
          <input type="text" class="form-control" name="ladoA" id="ladoA">
        </div>
      </div>
      <div class="form-group col-md-12">
        <div class="col-md-4">
          <label for="ladoB">Lado B</label>
          <input type="text" class="form-control" name="ladoB" id="ladoB">
        </div>
      </div>
      <div class="form-group col-md-12">
        <div class="col-md-2">
          <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </form>
  <?php if ($_REQUEST) : ?>
    <div class="alert alert-success"><?= 'O resultado da area do quadrado é: ' . $quadrado->calculaArea() ?></div>
  <?php endif ?>
</body>

</html>