<?php
  /**
   *
   */
  class ReparacionExterna {

    private $idReparacion;
    private $fechaSalida;
    private $fechaEntrada;
    private $precio;

    function __construct($idReparacion, $fechaSalida, $fechaEntrada, $precio) {
      $this->idReparacion = $idReparacion;
      $this->fechaSalida = $fechaSalida;
      $this->fechaEntrada = $fechaEntrada;
      $this->precio = $precio;
    }
  }
?>
