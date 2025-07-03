<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Contraseña</title>
</head>
<body>
  <h2>Crear una contraseña para futuros ingresos</h2>
  <form method="POST" action="guardar_clave.php">
    <input type="password" name="clave" placeholder="Nueva contraseña" required>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>
