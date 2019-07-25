<?php
require_once("Mamifero.php");

class Ave extends Mamifero
{
  private $corDePenas;

  public function getCorDePenas()
  {
    return $this->corDePenas;
  }
  public function setCorDePenas($corDePenas)
  {
    $this->corDePenas = $corDePenas;
  }

  public function locomover()
  {
    echo "<p> Sou uma ave e estou correndo </p>";
  }

  public function emitirSom()
  {
    echo "<p>(som de ave)</p>";
  }

  public function alimentar()
  {
    echo "<p>Comendo comida de ave </p>";
  }
}
