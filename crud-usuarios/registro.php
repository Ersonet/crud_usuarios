<form action="registro.php" method="POST">
  Nombre: <input type="text" name="nombre"><br>
  Correo: <input type="email" name="correo"><br>
  Teléfono: <input type="text" name="telefono"><br>
  <input type="submit" value="Registrar">
</form>

<?php
if ($_POST) {
  require_once "Usuario.php";
  Usuario::insertar($_POST['nombre'], $_POST['correo'], $_POST['telefono']);
  echo "Usuario registrado 🎉";
}
?>
