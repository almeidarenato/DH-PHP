<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  echo '<h1>While</h1>';
  $numero = 0;
  echo '<ul>';
  while ($numero < 6) {
    $numero++;
    echo '<li>' . $numero . '</li>';
  }
  echo '</ul>';
  echo '<h1>Loop Do-While</h1>';
  $numero = 6;
  echo '<ul>';
  do {
    echo '<li>' . $numero . '</li>';
    $numero--;
  } while ($numero > 0);
  echo '</ul>';

  echo '<h1>For</h1>';
  echo '<ul>';
  for ($numero = 1; $numero <= 6; $numero++) {
    echo '<li>' . $numero . '</li>';
  }
  echo '</ul>';

  echo '<h1>Foreach</h1>';
  echo '<ul>';
  $array = [
    'marca' => 'chevrolet',
    'modelo' => 'onix lt 1.0',
    'quilometros' => '120200 km',
    'Gasolina/Alcool' => 'Gasolina e Alcool'
  ];
  foreach ($array as $propriedade => $valor) {
    echo '<li><b>' . $propriedade . '</b>:' . $valor . '</li>';
  }
  echo '</ul>';

  echo '<h1>Foreach (apenas valor)</h1>';
  echo '<ul>';

  foreach ($array as  $valor) {
    echo '<li><b>' . $valor . '</b></li>';
  }
  echo '</ul>';

  echo '<h1>Outro Foreach - aula</h1>';

  $usuario = [
    'Nome' => 'Full',
    'Sobrenome' => 'Stack',
    'Idade' => '29'
  ];
  foreach ($usuario as $chave => $valor) {
    echo "$chave >>> $valor <br>";
  }
  echo '<h1>Outro Foreach - aula2</h1>';

  foreach ($usuario as $valor) {
    echo " $valor <br>";
  }


  ?>
</body>

</html>