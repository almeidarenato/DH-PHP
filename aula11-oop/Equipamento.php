<?php
//
abstract class Equipamento
{
  public $ligado;

  public function ligar()
  {
    if ($this->ligado == true)
      echo 'equipamento já está ligado <br>';
    else {
      $this->ligado = true;
      echo 'equipamento foi ligado <br>';
    }
  }
  public function desligar()
  {
    if ($this->ligado == false)
      echo 'equipamento já está desligado <br>';
    else {
      $this->ligado = false;
      echo 'equipamento foi desligado <br>';
    }
  }
}
