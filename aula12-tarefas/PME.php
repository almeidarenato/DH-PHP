<?php

require_once("Cliente.php");

class PME extends Cliente
{
  protected $cnpj;
  protected $razaoSocial;

  public function __construct($cnpj, $razaoSocial)
  {
    $this->cnpj = $cnpj;
    $this->razaoSocial = $razaoSocial;
  }
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
