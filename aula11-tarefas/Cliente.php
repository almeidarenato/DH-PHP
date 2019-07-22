<?php

//Defino variáveis privadas para a classe Cliente

Class Cliente{
  Private $nome;
  Private $sobrenome;
  Private $documento;
  Private $nascimento;
  Private $email;
  Private $pass;

//Crio uma função construtora com os parâmetros necessários

  public function __construct($nome,$sobrenome,$documento,$nascimento,$email,$pass){
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->documento = $documento;
    $this->nascimento = $nascimento;
    $this->email = $email;
    $this->pass = $pass;
  }

  //Crio funções públicas para definir o valor passado como parâmetro, ao executar a função construtura, como valor da propriedade do objeto instanciado

  public function setnome($nome){
    $this->nome = $nome;
  }
  public function getnome(){
    return $this->nome;
  }
  public function setsobrenome($sobrenome){
    $this->sobrenome = $sobrenome;
  }
  public function getsobrenome(){
    return $this->sobrenome;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setnascimento($nascimento){
    $this->nascimento = $nascimento;
  }
  public function getnascimento(){
    return $this->nascimento;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  }