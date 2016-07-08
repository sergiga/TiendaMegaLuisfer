<?php
/**
 *
 */
class DescrpcionComponente
{
  
  private $iddescripcion;
  private $tipo;
  private $marca;
  private $modelo;
  private $caracteristicas;

  function __construct($iddescripcion, $tipo, $marca, $modelo, $caracteristicas)
  {
    $this->iddescripcion=$iddescripcion;
    $this->tipo=$tipo;
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->caracteristicas=$caracteristicas;
  }
}

 ?>
