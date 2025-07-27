<?php
require_once "Usuario.php";
$usuarios = Usuario::listar();
?>

<table border="1">
<tr><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Acciones</th></tr>
<?php while($row = $usuarios->fetch_assoc()): ?>
<tr>
  <td><?= $row['nombre'] ?></td>
  <td><?= $row['correo'] ?></td>
  <td><?= $row['telefono'] ?></td>
  <td>
    <a href="editar.php?id=<?= $row['id'] ?>">Modificar</a> |
    <a href="listar.php?eliminar=<?= $row['id'] ?>">Eliminar</a>
  </td>
</tr>
<?php endwhile; ?>
</table>

<?php
if (isset($_GET['eliminar'])) {
  Usuario::eliminar($_GET['eliminar']);
  header("Location: listar.php");
}
?>
