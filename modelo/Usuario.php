<?php
require_once __DIR__.'/../datos/GestorPersistenciaUsuario.php';
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

  public static function comprobarUsuario($usernameLogin) {
    $usuario = GestorPersistenciaUsuario::getByUsername($usernameLogin);
    if(!is_null($usuario)) {
      return TRUE;
    }
  }

  public static function comprobarLogin($usernameLogin, $passLogin) {
    $usuario = GestorPersistenciaUsuario::getByUsername($usernameLogin);
    if(!is_null($usuario)) {
      return $passLogin === $usuario->getPassword();
    }
  }

  public function getPassword() {
    return $this->password;
  }
}

?>
