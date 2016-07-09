<?php
require_once 'utiles/config/GlobalVars.php';
require_once 'modelo/controladores/Controlador.php';
require_once 'modelo/controladores/ControladorFrontal.php';

if(isset($_GET["controller"])) {
  $controladorObj = cargarControlador($_GET["controller"]);
  lanzarAccion($controladorObj);
} else {
  $controladorObj = cargarControlador(CONTROLADOR_DEFECTO);
  lanzarAccion($controladorObj);
}
?>
