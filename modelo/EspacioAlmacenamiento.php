<?php

/**
 *
 */
class EspacioAlmacenamiento
{
  private $idubicacion;
  private $estanteria;
  private $cajon;

  function __construct($idubicacion, $estanteria, $cajon)
  {
    $this->idubicacion=$idubicacion;
    $this->estanteria=$estanteria;
    $this->cajon=$cajon;
  }
}

 ?>
