<?php
require_once("Mamifero.php");
require_once("Cachorro.php");
require_once("Ave.php");
require_once("Arara.php");
$macaco = new Mamifero();
$bulldog = new Cachorro();
$arara = new Arara();
$ave = new Ave();
//mamífero 
echo "<h1> Mamífero </h1>";
$cor = 'marrom';
$macaco->setCorDePelos($cor);
echo $macaco->getCorDePelos() . '<br>';
$macaco->locomover();
$macaco->alimentar();
$macaco->emitirSom();

echo "<hr>";
//cachorro
echo "<h1> Cachorro </h1>";
$bulldog->locomover();
$bulldog->emitirSom();
$bulldog->roerOsso();
$bulldog->locomover();

$arara->alimentar();
$ave->locomover();
$arara->locomover();
$arara->alimentar();
