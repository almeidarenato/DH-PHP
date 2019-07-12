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
  /* A - Criar uma função que verifique se existe um arquivo chamado
  texto.txt no mesmo diretório de arquivos.php. 
  Se o arquivo existir, deve ser aberto com direitos de leitura e escrita,
  para que seja possível adicionar informações.
  Se ele não existir, deve ser criado com direitos de leitura e escrita. */
  echo "<br>";
  $nomeArquivo = "texto.txt";
  if (file_exists($nomeArquivo)) {
    echo "o arquivo existe";
    $arquivoAberto =  fopen($nomeArquivo, "r+");
  } else {
    echo "o arquivo não existe";
    $arquivoAberto =  fopen($nomeArquivo, "x+");
  }
  /* B - A frase “Olá mundo! testando.” deve ser escrita 100 vezes no
  arquivo, 1 vez por linha. Depois disso, o arquivo deve ser fechado. */
  echo "<br>";
  echo "<br>";
  $contador = 0;
  while ($contador < 100) {
    $contador++;
    fwrite($arquivoAberto, "$contador Olá mundo! testando.\n");
  }
  fclose($arquivoAberto);

  /* C - Mostrar o conteúdo do arquivo texto.txt, lendo todo o arquivo de
uma vez. */
  echo "<br>";
  echo file_get_contents($nomeArquivo);
  echo "<br>";
  echo "<br>";
  echo "<br>";
  /* D - Mostrar o conteúdo do arquivo texto.txt, lendo e imprimindo linha
por linha. */
  $arquivoAberto = fopen($nomeArquivo, 'r');
  while ($linha = fgets($arquivoAberto)) {
    echo $linha;
    echo "<br>";
  }
  fclose($arquivoAberto);
  echo "<br>";
  /* E -Excluir o arquivo texto.txt */
  if (file_exists($nomeArquivo))
    unlink($nomeArquivo);
  if (!file_exists($nomeArquivo))
    echo "arquivo deletado com sucesso";
  echo "<br>";
  echo "<br>";
  /* F - Criar um novo arquivo chamado texto2.txt contendo o texto: “Olá
novamente, mundo!”. */
  $nomeArquivo = "texto2.txt";
  file_put_contents($nomeArquivo, "Olá novamente, mundo!\n");
  /* G - Escrever no arquivo texto2.txt “Este texto sobrescreve o anterior?” */
  $texto = file_get_contents($nomeArquivo);
  $texto = "$texto Este texto sobrescreve o anterior?";
  file_put_contents($nomeArquivo, $texto);

  /* H - Escrever no arquivo texto2.txt: “NÃO!” depois do texto que já existe.*/

  $texto = file_get_contents($nomeArquivo);
  $texto = "$texto NÃO!";
  file_put_contents($nomeArquivo, $texto);

  /* ARQUIVOS JSON */
  /* A - Criar um arquivo categorias.json com os seguintes dados: 
  {“categorias” : [
{“id”: 1, “nome”: “Esportes”},
{“id”: 2, “nome”: “História”},
{“id”: 3, “nome”: “Entretenimento”},
{“id”: 4, “nome”: “Geografia”},
{“id”: 5, “nome”: “Arte”}
]}
*/

  /* B - Ler o arquivo e imprimir uma checkbox para cada categoria */
  $arquivoJSON = 'categorias.json';
  $conteudoJSON = file_get_contents($arquivoJSON);
  $conteudo = json_decode($conteudoJSON, true);
  // var_dump($conteudo);
  echo "<br>";
  foreach ($conteudo[categorias] as $key => $value) : ?>
    <input type="checkbox" name="<?= $value[nome] ?>" id="<?= $value[nome] ?>"><label for="<?= $value[nome] ?>"><?= $value[nome] ?></label>
  <?php endforeach ?>
</body>

</html>