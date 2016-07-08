<?php

/**
 *
 */
class MovilRoto extends Articulo
{

  private $etiqueta:
  private $descripcion;
  private $EstadoMovil;
  private $EspacioAlmacenamiento;

  function __construct($etiqueta, $descripcion, $EstadoMovil, $EspacioAlmacenamiento)
  {
    $this->descripcion=$descripcion;
    $this->EstadoMovil=$EstadoMovil;
    $this->EspacioAlmacenamiento=$EspacioAlmacenamiento;
    parent::__construct($etiqueta, $fechaEntrada, $Factura);
  }
}


 ?>
