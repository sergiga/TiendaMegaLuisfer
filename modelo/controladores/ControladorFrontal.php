<?php
function cargarControlador($controladorSelec) {
  $controlador = 'Controlador'.ucwords($controladorSelec);
  $controladorFilePath = 'modelo/controladores'.$controlador.'.php';

  if(!is_file($controladorFilePath)) {
    $controladorFilePath = 'modelo/controladores/Controlador'.ucwords(CONTROLADOR_DEFECTO).'.php';
  }
  require_once $controladorFilePath;
  $controladorObj = new $controlador();
  return $controladorObj;
}

function cargarAccion($controladorObj, $accionSelec) {
  $accion = $accionSelec;
  $controladorObj->$accion();
}

function lanzarAccion($controladorObj) {
  if(isset($_GET["action"]) && method_exists($controladorObj, $_GET["action"])) {
    cargarAccion($controladorObj, $_GET["action"]);
  } else {
    cargarAccion($controladorObj, ACCION_DEFECTO);
  }
}
?>
