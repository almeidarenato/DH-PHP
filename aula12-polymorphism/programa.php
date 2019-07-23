<?php
require_once("Mamifero.php");
$macaco = new Mamifero();
$cor = 'marrom';

echo $macaco->getCorDePelos() . '<br>';
$macaco->locomover();
$macaco->alimentar();
$macaco->emitirSom();
$macaco->setCorDePelos($cor);
echo $macaco->getCorDePelos() . '<br>';
