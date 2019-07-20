<?php
require_once("Equipamento.php");

class AspiradorDePo extends Equipamento
{
  public $filtro;


  public function __construct()
  {
    $this->filtro = [];
  }
  public function aspirar($sujeira)
  {

    if (count($this->filtro) < 2) {
      array_push($this->filtro, $sujeira);
      echo "Aspirando Sujeiras : <br>Encontrei <b>$sujeira</b> por aqui-- <br>";
    } else {
      echo "Filtro de sujeira está cheio <br> Não é possível aspirar <b> $sujeira </b> <br>Limpe primeiro!!<br>";
    }
  }
  public function limpar()
  {
    foreach ($this->filtro as $value)
      if ($value) {
        array_pop($this->filtro);
        echo "limpando filtro (achei o : <b>$value</b> aqui e removi)<br>";
      }
    echo 'Aspirador vazio!!<br>';
  }
}
