<?php

class Pendrive
{
  public $listaDeMusicas;
  public $marca;

  public function __construct($marca)
  {
    $this->listaDeMusicas = [];
    $this->marca = $marca;
  }
}
