<?php
require_once("Controlador.php");

class controleRemoto implements Controlador
{
  private $volume;
  private $ligado;
  private $mudo;

  function __construct()
  {
    $this->volume = 0;
    $this->ligado = false;
  }
  public function setLigado($ligado)
  {
    $this->ligado = $ligado;
  }
  public function getLigado()
  {
    return $this->ligado;
  }
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }
  public function getVolume()
  {
    return $this->volume;
  }

  public function ligar()
  {
    if (!$this->getLigado()) {
      $this->setLigado(true);
      echo "<p>Aparelho foi <b>ligado</b>!</p>";
    } else {
      echo "<p>Aparelho já está <b>ligado</b>!</p>";
    }
  }
  public function desligar()
  {
    if ($this->getLigado()) {
      $this->setLigado(false);
      echo "<p>Aparelho foi <b>desligado!</b></p>";
    } else {
      echo "<p>Aparelho já está <b>desligado!</b></p>";
    }
  }
  public function aumentarVolume()
  {
    if ($this->getLigado() && $this->getVolume() < 10) {
      $this->setVolume(($this->getVolume() + 1));
      echo '<p> Aumentando volume. Valor atual:' . $this->getVolume() . '</p>';
    } else {
      if (!$this->getLigado())
        echo "<p>Ligue primeiro antes de aumentar o volume</p>";
      else
        echo "<p>O volume já está no máximo  :" . $this->getVolume() . "</p>";
    }
  }
  public function diminuirVolume()
  {
    if ($this->getLigado() &&  $this->getVolume() > 0) {
      $this->setVolume($this->getVolume() - 1);
      echo '<p> Diminuindo volume. Valor atual:' . $this->getVolume() . '</p>';
    } else {
      if (!$this->getLigado())
        echo "Ligue primeiro antes de diminuir o volume";
      else {
        echo "O volume já está no minimo  : 0";
      }
    }
  }

  public function ativarMudo()
  {
    if ($this->ligado) {
      if ($this->mudo) {
        echo "<p>Modo mudo já está ativo</p>";
      } else {
        $this->mudo = true;
        echo "<p>Modo mudo <b>ativado</b></p>";
      }
    } else {
      echo "<p> Ligue antes de ativar o modo Mudo</p>";
    }
  }
  public function desativarMudo()
  {
    if ($this->ligado) {
      if (!$this->mudo) {
        echo "<p>Modo mudo já está desativado</p>";
      } else {
        $this->mudo = false;
        echo "<p>Modo mudo <b>desativado</b></p>";
      }
    } else {
      echo "<p> Ligue antes de desativar o modo Mudo</p>";
    }
  }
}
