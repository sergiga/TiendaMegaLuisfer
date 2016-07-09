<?php
require_once 'datos/Conexion.php';
/**
 *
 */
class ControladorLogin extends Controlador {

  private $conexion;

  public function __construct() {

    parent::__construct();
    $this->conexion = Conexion::getInstance();
  }

  public function login() {
    $this->vista("login", array());
  }

  public function procesarLogin() {
    if(isset($_POST["username"]) && isset($_POST["password"])) {
      $loginValido = Usuario::comprobarLogin($_POST["username"], $_POST["password"]);
    }
  }
}

?>
