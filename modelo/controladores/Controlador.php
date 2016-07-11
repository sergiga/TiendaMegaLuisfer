<?php
/**
 *
 */
class Controlador {

  function __construct() {

    foreach(glob("modelo/*.php") as $file) {
      require_once $file;
    }
  }

  public function vista($vistaSelec, $datos) {

    foreach ($datos as $id => $valor) {
      ${$id} = $valor;
    }
    require_once 'utiles/helpers/VistaHelper.php';
    $helper = new VistaHelper();
    require_once 'presentacion/Vista'.ucwords($vistaSelec).'.html';
  }

  public function redireccionar($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO) {

    header("Location:index.php?controller=".$controlador."&action=".$accion);
  }
}

?>
