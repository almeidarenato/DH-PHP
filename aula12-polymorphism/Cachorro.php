<?php
require_once("Mamifero.php");

class Cachorro extends Mamifero
{

  public function locomover()
  {
    echo "<p> Sou um cachorro e estou corrento </p>";
  }

  public function emitirSom()
  {
    echo "<p>Au Au</p>";
  }

  public function roerOsso()
  {
    echo "<p>Roendo osso </p>";
  }
}
