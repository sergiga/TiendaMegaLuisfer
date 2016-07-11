<?php
require_once __DIR__.'/../../datos/Conexion.php';
require_once __DIR__.'/../Usuario.php';

if(isset($_POST["username"])) {
  $usuarioExiste = Usuario::comprobarUsuario($_POST["username"]);
  echo $usuarioExiste;
}
?>
