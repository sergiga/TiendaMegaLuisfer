<?php

/**
 *
 */
class MovilRoto extends Articulo
{

  private $descripcion;
  private $EEstadoMovilRoto;
  private $EspacioAlmacenamiento;

  function __construct($descripcion, $EEstadoMovilRoto, $EspacioAlmacenamiento,
    $etiqueta, $fechaEntrada, $Factura)
  {
    $this->descripcion=$descripcion;
    $this->EstadoMovilRoto=$EstadoMovilRoto;
    $this->EspacioAlmacenamiento=$EspacioAlmacenamiento;
    parent::__construct($etiqueta, $fechaEntrada, $Factura);
  }
}

 ?>
