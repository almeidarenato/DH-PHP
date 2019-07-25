<?php
require_once("Animal.php");

class Peixe extends Animal
{
  private $corDoPeixe;

  public function getCorDoPeixe()
  {
    return $this->CorDoPeixe;
  }
  public function setCorDoPeixe($CorDoPeixe)
  {
    $this->CorDoPeixe = $CorDoPeixe;
  }

  public function locomover()
  {
    echo "<p> Sou um peixe e estou nadando </p>";
  }

  public function emitirSom()
  {
    echo "<p>(som de peixe -- se é que existe)</p>";
  }

  public function alimentar()
  {
    echo "<p>Comendo comida de peixe</p>";
  }
  public function soltarBolha()
  {
    echo "<p>Soltei uma bolha</p>";
  }
}
