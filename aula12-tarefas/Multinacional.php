<?php

require_once("Cliente.php");

class Multinacional extends Cliente
{
  private $cnpj;
  private $razaoSocial;

  public function setCNPJ($cnpj)
  {
    $this->cnpj = $cnpj;
  }
  public function getCNPJ()
  {
    return $this->cnpj;
  }
  public function setRazaoSocial($razaoSocial)
  {
    $this->razaoSocial = $razaoSocial;
  }
  public function getRazaoSocial()
  {
    return $this->razaoSocial;
  }
}
