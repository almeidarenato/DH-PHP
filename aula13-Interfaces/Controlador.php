<?php
interface Controlador
{
  public function ligar();
  public function desligar();
  public function aumentarVolume();
  public function diminuirVolume();
  public function ativarMudo();
  public function desativarMudo();
}
