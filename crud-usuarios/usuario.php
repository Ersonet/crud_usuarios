<?php
require_once "conexion.php";

class Usuario {
  public static function insertar($nombre, $correo, $telefono) {
    global $conexion;
    $sql = "INSERT INTO usuarios(nombre, correo, telefono) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $telefono);
    $stmt->execute();
  }

  public static function listar() {
    global $conexion;
    return $conexion->query("SELECT * FROM usuarios");
  }

  public static function modificar($id, $nombre, $correo, $telefono) {
    global $conexion;
    $sql = "UPDATE usuarios SET nombre=?, correo=?, telefono=? WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssi", $nombre, $correo, $telefono, $id);
    $stmt->execute();
  }

  public static function eliminar($id) {
    global $conexion;
    $sql = "DELETE FROM usuarios WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
  }
}
?>
