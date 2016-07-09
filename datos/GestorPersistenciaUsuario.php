<?php
/**
 *
 */
class GestorPersistenciaUsuario {

  public static function getByUsername($id) {
    $conexion = Conexion::getInstance();
    $query = "SELECT * FROM usuario WHERE usuario.username = ".$id;
    $statement = $conexion->prepare($query);
    $result = $statement->execute();
    $filas = $result->fetchAll();

    $usuario = NULL;
    foreach ($filas as $fila) {
      $usuario = new Usuario ($fila["username"],
                              $fila["nifdni"],
                              $fila["nombre"],
                              $fila["apellidos"],
                              $fila["telefono"],
                              $fila["email"],
                              $fila["password"]);
    }
    return $usuario;
  }
}

?>
