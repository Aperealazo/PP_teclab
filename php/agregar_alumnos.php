<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Agregar Alumno</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/barra.css">
  <link rel="stylesheet" href="../css/formulario-Estilos.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h2>Mi Aula</h2>
  <a href="crear_cursos.php"><i class="bi bi-journal-plus me-2"></i>Crear Curso</a>
  <a href="crear_division.php"><i class="bi bi-diagram-3 me-2"></i>Crear División</a>
  <a href="agregar_alumnos.php" class="active"><i class="bi bi-people me-2"></i>Agregar Alumnos</a>
  <a href="notas.php"><i class="bi bi-pencil-square me-2"></i>Gestionar Notas</a>
  <a href="asistencia.php"><i class="bi bi-calendar-check me-2"></i>Gestionar Asistencia</a>
</div>

<!-- Formulario -->
<div class="form-wrapper">
  <h3><i class="bi bi-person-plus me-2"></i>Agregar Alumno</h3>

  <form>
    <div class="mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" class="form-control" placeholder="Ej: Juan" required>
    </div>

    <div class="mb-3">
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" class="form-control" placeholder="Ej: Pérez" required>
    </div>

    <div class="mb-3">
      <label for="email">Correo Electrónico</label>
      <input type="email" id="email" class="form-control" placeholder="Ej: juanperez@mail.com" required>
    </div>

    <div class="mb-3">
      <label for="division">División</label>
      <select id="division" class="form-select" required>
        <option disabled selected>Seleccione una división</option>
        <option value="1">Programación II – 1ra</option>
        <option value="2">Programación II – 2da</option>
        <!-- Este contenido se cargará desde la base luego -->
      </select>
    </div>

    <button type="submit" class="btn btn-crear">
      <i class="bi bi-person-fill-add me-2"></i>Registrar Alumno
    </button>
  </form>
</div>

</body>
</html>
