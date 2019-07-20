<?php

require_once("Equipamento.php");

class AparelhoDeSom extends Equipamento
{
  public $volume;
  public $numeroDeFaixa;
  public $usb;

  public function __construct()
  {
    $this->volume = 0;
    $this->numeroDeFaixa = 0;
  }
  //conectar
  public function conectar($pendrive)
  {
    $this->usb = $pendrive;
    echo "O Pendrive <b>$pendrive</b> foi conectado <br>";
  }
  //aumenta

  public function aumentarVolume($valorVolume)
  {
    if ($this->ligado) {
      if (($this->volume + $valorVolume) <= 20) {
        $this->volume += $valorVolume;
        echo "Volume atual em $valorVolume <br>";
      } else {
        $this->volume = 20;
        echo "Volume máximo atingido <br>";
      }
    } else {
      echo "Ligue o aparelho para aumentar o volume";
    }
  }
  //diminui
  public function diminuirVolume($valorVolume)
  {
    if ($this->ligado) {
      if (($this->volume - $valorVolume) > 0) {
        $this->volume -= $valorVolume;
        echo "Volume atual em $this->volume <br>";
      } else {
        $this->volume = 0;
        echo "Volume minimo atingido atingido <br>";
      }
    } else {
      echo "Ligue o aparelho para diminuir o volume";
    }
  }
  //reproduzMusica
  //avançaFaixa
  //retornaFaixa

}
