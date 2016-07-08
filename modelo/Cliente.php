<?php
/**
 *
 */
class Cliente {

  private $idCliente;
  private $nifDni;
  private $nombre;
  private $apellidos;
  private $telefono;
  private $email;

  function __construct($id, $nifDni, $nombre, $apellidos, $apellidos, $telefono, $email) {
    $this->idCliente = $id;
    $this->nifDni = $nifDni;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->telefono = $telefono;
    $this->email = $email;
  }
}

?>
