<?php
require_once "Usuario.php";
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $datos = Usuario::listar()->fetch_assoc();
}

if ($_POST) {
  Usuario::modificar($_POST['id'], $_POST['nombre'], $_POST['correo'], $_POST['telefono']);
  echo "Usuario actualizado 💾";
}
?>

<form method="POST">
  <input type="hidden" name="id" value="<?= $id ?>">
  Nombre: <input type="text" name="nombre"><br>
  Correo: <input type="email" name="correo"><br>
  Teléfono: <input type="text" name="telefono"><br>
  <input type="submit" value="Actualizar">
</form>
