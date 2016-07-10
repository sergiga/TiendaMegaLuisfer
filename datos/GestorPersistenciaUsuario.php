<?php
/**
 *
 */
class GestorPersistenciaUsuario {

  public static function getByUsername($id) {
    $conexion = Conexion::getInstance();
    $query = "SELECT * FROM usuario WHERE usuario.username = :usuario";
    $statement = $conexion->prepare($query);
    $statement->bindValue(':usuario', $id);
    $result = $statement->execute();
    $filas = $statement->fetchAll(PDO::FETCH_ASSOC);

    $usuario = NULL;
    
    foreach ($filas as $fila) {
      $usuario = new Usuario ($fila['USERNAME'],
                              $fila['NIFDNI'],
                              $fila['NOMBRE'],
                              $fila['APELLIDOS'],
                              $fila['TELEFONO'],
                              $fila['EMAIL'],
                              $fila['PASSWORD']);

      return $usuario;
    }
  }
}
?>
