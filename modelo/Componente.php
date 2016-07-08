<?php
/**
 *
 */
class Componente
{

  private $estado;
  private $EEstadoComponente;
  private $DescrpcionComponente;
  private $MovilRoto;
  private $EspacioAlmacenamiento;

  function __construct($estado, $EEstadoComponente, $DescrpcionComponente,
  $MovilRoto, $EspacioAlmacenamiento, $etiqueta, $fechaEntrada, $Factura)
  {
    $this->estado=$estado;
    $this->EEstadoComponente=$EEstadoComponente;
    $this->DescrpcionComponente=$DescrpcionComponente;
    $this->MovilRoto=$MovilRoto;
    $this->EspacioAlmacenamiento=$EspacioAlmacenamiento;
    parent::__construct($etiqueta, $fechaEntrada, $Factura);
  }
}

 ?>
