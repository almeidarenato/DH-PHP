<?php
require_once("Animal.php");
class Mamifero extends Animal
{
  private $corDePelos;

  public function __construct()
  {
    $this->corDePelos = "Branco";
  }

  public function locomover()
  {
    echo "<p>Correndo</p>";
  }
  public function alimentar()
  {
    echo "<p>Amamentando-se</p>";
  }
  public function emitirSom()
  {
    echo "<p>Som de mamifero</p>";
  }

  function getCorDePelos()
  {
    return $this->corDePelos;
  }
  function setCorDePelos($corDePelos)
  {
    $this->corDePelos = $corDePelos;
  }
}
