<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testando Funções</title>
</head>

<body>
  <h1>

    <!-- *** STRPOS ***
    strpos => recebe dois parametros e é responsável por retornar 
    a posição de onde localiza a primeira letra da string passada 
    para procurar
    
    -->

    <?php
    $mystring = 'abc';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);
    echo "strpos: $pos";
    ?>

    <!-- *** STRSTR ***

  strstr => fornece dois parametros ou 3  e retorna tudo que é encontrado após o 
  segundo parametro (se o parametro for false.);
 Se o parametro for true retorna tudo que vem antes.
  -->
    <?php
    $email = 'name@example.com;';
    $domain = strstr($email, '@', false);
    echo "<br>strstr: $domain";
    ?>
    <!-- STRLEN Fornece: numero 6 (quantidade de caracteres) -->
    <?php
    $str = 'abcdef';
    echo '<br>strlen: ' . strlen($str); // 6
    ?>
    <!-- STR_REPLACE Fornece: Hll Wrld f PHP (Remove todas as consoantes) -->

    <?php
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $apenas_consoantes = str_replace($vogais, "", "Hello World of PHP");
    echo '<br>str_replace: ';
    echo $apenas_consoantes;

    ?>

    <!-- COUNT Fornece: 3 (conta o conteúdo) -->

    <?php
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    $result = count($a);
    echo '<br>count(array): ' . $result;
    $b = 'alcachofra';
    $result = count($b);
    echo '<br>count(string): ' . $result;

    ?>
    <!-- ISSET - informa se a variável existe -->
    <?php
    $var;

    // Será interpretado como TRUE imprimindo o texto.
    if (isset($var)) {
      echo "Essa variável existe.";
    } else {
      echo 'não existe';
    }
    ?>
  </h1>
</body>

</html>