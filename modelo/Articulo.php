<?php
/**
 *
 */
class Articulo {

  private $etiqueta;
  private $fechaEntrada;
  private $Factura;

  function __construct($etiqueta, $fechaEntrada, $Factura) {
    $this->etiqueta = $etiqueta;
    $this->fechaEntrada = $fechaEntrada;
    $this->Factura = $Factura;
  }
}

?>
