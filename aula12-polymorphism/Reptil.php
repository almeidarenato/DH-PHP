<?php
require_once("Animal.php");

class Reptil extends Animal
{
  private $corDaPele;

  public function getCorDaPele()
  {
    return $this->corDaPele;
  }
  public function setCorDaPele($corDaPele)
  {
    $this->corDaPele = $corDaPele;
  }

  public function locomover()
  {
    echo "<p> Sou um réptil e estou andando </p>";
  }

  public function emitirSom()
  {
    echo "<p>(som de reptil -- se é que existe)</p>";
  }

  public function alimentar()
  {
    echo "<p>Comendo comida de reptil</p>";
  }
}
