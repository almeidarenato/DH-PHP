<?php
echo "<h1> Programa Controle Remoto</h1>";
require_once("ControleRemoto.php");
$controleRemoto = new ControleRemoto();

$controleRemoto->ligar();
$controleRemoto->ligar();
$controleRemoto->desligar();
$controleRemoto->desligar();

$controleRemoto->aumentarVolume();
$controleRemoto->ligar();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->desligar();

$controleRemoto->diminuirVolume();
$controleRemoto->ligar();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();

$controleRemoto->desligar();
$controleRemoto->ativarMudo();
$controleRemoto->ligar();
$controleRemoto->ativarMudo();
$controleRemoto->ativarMudo();
$controleRemoto->desativarMudo();
$controleRemoto->desativarMudo();

// Programa Conta
echo "<hr>";
echo "<h1> Programa Conta</h1>";
require_once("Conta.php");

$conta = new Conta();
$conta->setNomeConta("Teste Conta Corrente");
$conta->setTipoConta("cc");
$conta->abrirConta();

echo $conta->getSaldo();
echo $conta->depositar(100);
echo $conta->getSaldo();

$conta2 = new Conta();
$conta2->setNomeConta("Teste Conta Poupança");
$conta2->setTipoConta("cp");
$conta2->abrirConta();

echo $conta2->getSaldo();
echo $conta2->depositar(100);
echo $conta2->getSaldo();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/light.min.css">
  <title>Document</title>
</head>

<body>

</body>

</html>