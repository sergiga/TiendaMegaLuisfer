<?php
/**
 *
 */
class Factura {

  private $idFactura;
  private $precio;
  private $fechaSalida;
  private $Cliente;

  function __construct($idFactura, $precio, $fechaSalida, $Cliente) {
    $this->idFactura = $idFactura;
    $this->precio = $precio;
    $this->fechaSalida = $fechaSalida;
    $this->Cliente = $Cliente;
  }
}

?>
