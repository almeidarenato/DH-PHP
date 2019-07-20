<?php
require_once("AspiradorDePo.php");
require_once("Pendrive.php");
require_once("AparelhoDeSom.php");

//instanciar
$pendrive = new Pendrive();
$aspiradorDePo = new AspiradorDePo();
$aparelhoDeSom = new AparelhoDeSom();


$aspiradorDePo->ligar();
$aspiradorDePo->aspirar('lixo 1');
$aspiradorDePo->aspirar('lixo 2');
$aspiradorDePo->aspirar('outra coisa');
$aspiradorDePo->limpar();
$aspiradorDePo->desligar();
echo "<br>";
array_push($pendrive->listaDeMusicas, 'musica1.mp3');
array_push($pendrive->listaDeMusicas, 'musica2.mp3');
array_push($pendrive->listaDeMusicas, 'musica3.mp3');

echo "<br>";
echo "<b>Lista de Musicas:</b><br>";
echo "<ul>";
foreach ($pendrive->listaDeMusicas as $key => $value) {
  echo "<li>$value</li>";
}
echo "</ul>";

echo "<br>";
echo "<hr>";
$aparelhoDeSom->ligar();
$aparelhoDeSom->conectar("Cruzer Blade 8 gb");
$aparelhoDeSom->aumentarVolume(12);
$aparelhoDeSom->aumentarVolume(19);
$aparelhoDeSom->diminuirVolume(5);
$aparelhoDeSom->diminuirVolume(5);
$aparelhoDeSom->diminuirVolume(5);
$aparelhoDeSom->diminuirVolume(5);
$aparelhoDeSom->diminuirVolume(5);
$aparelhoDeSom->desligar();
$aparelhoDeSom->aumentarVolume(11);
