<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestor Docente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar p-3">
      <h6 class="text-uppercase text-muted">Gestión de Cursos</h6>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-grid"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="php/crear_cursos.php"><i class="bi bi-mortarboard"></i> Crear Curso</a></li>
        <li class="nav-item"><a class="nav-link" href="php/crear_divisiones.php"><i class="bi bi-mortarboard"></i> Crear División</a></li>
        <li class="nav-item"><a class="nav-link" href="php/agregar_alumnos.php"><i class="bi bi-person-plus"></i> Agregar Alumnos</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-pencil-square"></i> Gestionar Notas</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-calendar-check"></i> Gestionar Asistencia</a></li>
      </ul>
      <hr />

    </aside>

    <!-- Contenido principa -->
    <main class="flex-grow-1 p-4">
      <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
      <h3><strong>Bienvenido/a, Pablo !</strong></h3>
      <p class="text-muted">Acá hay un resumen del estado de tus cursos</p>

      <div class="row g-4 mt-4">
        <div class="col-md-2 col-6">
          <div class="info-card">
            <p>Total Estudiantes</p>
            <h4>1</h4>
          </div>
        </div>
        <div class="col-md-2 col-6">
          <div class="info-card">
            <p>Cursos Activos</p>
            <h4>1</h4>
          </div>
        </div>
        <div class="col-md-2 col-6">
          <div class="info-card">
            <p>Total Exámenes</p>
            <h4>2</h4>
          </div>
        </div>
        
      </div>
    </main>
  </div>
</body>
</html>
