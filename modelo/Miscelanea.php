<?php
/**
 *
 */
class Miscelanea extends Articulo {

  private $informacion;

  function __construct($informacion, $etiqueta, $fechaEntrada, $Factura) {
    $this->informacion = $informacion;
    parent::__construct($etiqueta, $fechaEntrada, $Factura);
  }
}
?>
