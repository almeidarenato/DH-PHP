<?php
$nomeArquivo = 'usuarios.json';
function cadastrarUsuario($usuario)
{
  //pega o arquivo Json usuarios.json
  global $nomeArquivo;
  //coleta as informações
  $jsonUsuarios = file_get_contents($nomeArquivo);
  //decodifica arquivo
  $arrayUsuarios = json_decode($jsonUsuarios, true);
  //adiciona novo usuário no arquivo json
  array_push($arrayUsuarios['usuarios'], $usuario);
  // codifica novamente o arquivo json
  $jsonUsuarios = json_encode($arrayUsuarios);

  $cadastrou = file_put_contents($nomeArquivo, $jsonUsuarios);

  //retorna o arquivo.
  return $cadastrou;
}
function logarUsuario($email, $senha)
{
  global $nomeArquivo;

  $logado = false;
  $jsonUsuarios = file_get_contents($nomeArquivo);
  $arrayUsuarios = json_decode($jsonUsuarios, true);
  foreach ($arrayUsuarios['usuarios'] as $key => $value) {
    if ($email == $value["email"] && $senha == $value['senha']) {
      $logado = true;
      break;
    }
  }
  return $logado;
}
