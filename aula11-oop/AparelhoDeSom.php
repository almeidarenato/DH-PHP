<?php

require_once("Equipamento.php");
require_once("Pendrive.php");
class AparelhoDeSom extends Equipamento
{
  private $volume;
  private $numeroDeFaixa;
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
    echo "O Pendrive foi conectado <br>";
  }
  //aumenta

  public function aumentarVolume($valorVolume)
  {
    if ($this->ligado) {
      if (($this->volume + $valorVolume) <= 20) {
        $this->volume += $valorVolume;
        echo "Volume atual 🔊 em $valorVolume <br>";
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
        echo "Volume atual 🔉 em $this->volume <br>";
      } else {
        $this->volume = 0;
        echo "Volume minimo atingido <br>";
      }
    } else {
      echo "Ligue o aparelho para diminuir o volume";
    }
  }
  //reproduzMusica
  public function reproduzir()
  {
    if ($this->ligado) {
      if (isset($this->usb) == true) {
        if ($this->numeroDeFaixa < count($this->usb->listaDeMusicas)) {
          echo "Reproduzindo Música - Faixa " . ($this->numeroDeFaixa) . " : ♫ <b>" . $this->usb->listaDeMusicas[$this->numeroDeFaixa] . '</b><br>';
        } else {
          if (count($this->usb->listaDeMusicas) === 0)
            echo "Não há musicas para reproduzir <br>";
        }
      } else {
        echo "não há pendrive conectado <br>";
      }
    } else {
      echo "Aparelho de som está desligado. Ligue antes de utilizar <br>";
    }
  }

  //avançaFaixa
  public function avancarFaixa()
  {
    if ($this->ligado) {
      if (isset($this->usb) == true) {
        echo "<i>Avançando 1 Faixa</i> ⏩ <br>";
        $this->numeroDeFaixa++;
        if ($this->numeroDeFaixa < count($this->usb->listaDeMusicas)) {
          $this->reproduzir();
        } else {
          echo "<span style='color:red'> Você está na última música</span> <br>";
          $this->numeroDeFaixa--;
        }
      } else {
        echo "não há pendrive conectado <br>";
      }
    } else {
      echo "Aparelho de som está desligado. Ligue antes de utilizar <br>";
    }
  }
  //retornaFaixa
  public function retornarFaixa()
  {
    if ($this->ligado) {
      if (isset($this->usb) == true) {
        echo "<i>Retrocedendo 1 Faixa</i> ⏪ <br>";
        $this->numeroDeFaixa--;
        if ($this->numeroDeFaixa >= 0) {
          $this->reproduzir();
        } else {
          echo "<span style='color:red'> Você está na primeira música</span> <br>";
          $this->numeroDeFaixa = 0;
        }
      } else {
        echo "não há pendrive conectado <br>";
      }
    } else {
      echo "Aparelho de som está desligado. Ligue antes de utilizar <br>";
    }
  }
}
