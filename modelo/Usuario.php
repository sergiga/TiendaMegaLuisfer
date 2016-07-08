<?php
/**
 *
 */
class Usuario
{

  private $username;
  private $nifdni;
  private $nombre;
  private $apellidos;
  private $telefono;
  private $email;
  private $password;

  function __construct($username, $nifdni, $nombre, $apellidos, $telefono,
    $email, $password)
  {
    $this->username=$username;
    $this->nifdni=$nifdni;
    $this->nombre=$nombre;
    $this->apellidos=$apellidos;
    $this->telefono=$telefono;
    $this->email=$email;
    $this->password=$password;
  }
}

?>
