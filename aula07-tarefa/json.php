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
  $a =  ['a' => 1, 'b' => 2, 'c' => 'Eu <3 JSON'];

  // A- Fazer echo da variavel $a
  echo $a;
  echo '<br>';
  // B - utilizar o json_encode para transformar a array em json e atribuir a $a
  $a = json_encode($a);

  // C - fazer um echo de $a
  echo $a;
  echo '<br>';
  // D - Criar uma nova variável $b contendo o json_decode da variável $a.
  $b = json_decode($a, true);

  // E - Fazer echo de $b.
  echo $b;
  //var_dump($b);
  echo '<br>';

  // F - Imprimir a frase “Eu <3 JSON | 1 | 2 |” utilizando os dados da variável
  echo "$b[c] | $b[a] | $b[b]";
  ?>
</body>

</html>