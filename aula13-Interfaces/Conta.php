<?php

class Conta
{
  public $codigoDaConta;
  public $nomeConta;
  private $saldo;
  private $tipoConta;
  private $situacao;
  private $tarifa;

  // construct

  public function __construct()
  {
    $this->situacao = false;
    $this->saldo = 0;
    $this->nomeConta = 'oi';
  }

  /////////////////
  // getters     //
  /////////////////
  public function getNomeConta()
  {
    return $this->nomeConta;
  }
  public function getSaldo()
  {
    return $this->saldo;
  }
  public function getTipoConta()
  {
    return $this->tipoConta;
  }
  public function getSituacao()
  {
    return $this->situacao;
  }
  public function getTarifa()
  {
    return $this->tarifa;
  }

  /////////////////
  // setters    //
  ////////////////

  public function setNomeConta($nomeContaa)
  {
    $this->nomeConta = $nomeContaa;
  }
  public function setTipoConta($tipoConta)
  {
    $this->tipoConta = $tipoConta;
  }
  public function setSituacao($situacao)
  {
    $this->situacao = $situacao;
  }
  public function setSaldo($saldo)
  {
    $this->saldo = $saldo;
  }
  public function setTarifa($tarifa)
  {
    $this->tarifa = $tarifa;
  }
  ////////// Métodos

  function setCodigoDaConta($codigo)
  {
    $this->codigoDaConta = $this->codigoDaConta + $codigo;
  }

  public function abrirConta()
  {
    if ($this->getNomeConta() != null && $this->getTipoConta() != null) {
      $this->setCodigoDaConta(1);

      $this->setSituacao(true);
    } else {
      echo "<p> Você necessita informar seu nome e um tipo de conta</p>";
    }
    if ($this->getSaldo() == 0 && $this->getTipoConta() == 'cc') {
      $this->setTarifa(10);
      $this->setSaldo(100);
      echo "<p> Conta Corrente criada com sucesso</p>";
    } else if ($this->getSaldo() == 0 && $this->getTipoConta() == 'cp') {
      $this->setTarifa(20);
      $this->setSaldo(200);
      echo "<p> Conta Poupança criada com sucesso</p>";
    }
  }

  public function depositar($valor)
  {
    if ($this->getSituacao()) {
      $this->setSaldo($this->getSaldo() + $valor);
      echo "<p> O Valor foi depositado, saldo atual: " . $this->getSaldo() . "</p>";
    } else {
      echo "<p>Conta cancelada. Não foi possível realizar depósito</p>";
    }
  }

  //pagar
  //depositar
  //retirar
}
