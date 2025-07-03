<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear División</title>
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
  <a href="crear_division.php" class="active"><i class="bi bi-diagram-3 me-2"></i>Crear División</a>
  <a href="agregar_alumnos.php"><i class="bi bi-people me-2"></i>Agregar Alumnos</a>
  <a href="notas.php"><i class="bi bi-pencil-square me-2"></i>Gestionar Notas</a>
  <a href="asistencia.php"><i class="bi bi-calendar-check me-2"></i>Gestionar Asistencia</a>
</div>

<!-- Formulario -->
<div class="form-wrapper">
  <h3><i class="bi bi-diagram-3 me-2"></i>Crear División</h3>

  <div class="alert alert-info alert-custom">
    Selecciona el curso y la división que deseas crear. Las divisiones ayudan a organizar a los alumnos por grupo dentro de una misma materia.
  </div>

  <form>
    <div class="mb-3">
      <label for="curso">Curso</label>
      <select id="curso" class="form-select" required>
        <option disabled selected>Seleccione un curso</option>
        <option value="1">Programación II</option>
        <option value="2">Base de Datos</option>
        <!-- En versión backend, esto se llenará desde la base -->
      </select>
    </div>

    <div class="mb-3">
      <label for="division">Nombre de la División</label>
      <select id="division" class="form-select" required>
        <option disabled selected>Seleccione una división</option>
        <option value="1ra">1ra</option>
        <option value="2da">2da</option>
      </select>
    </div>

    <button type="submit" class="btn btn-crear">
      <i class="bi bi-check-circle me-2"></i>Crear División
    </button>
  </form>
</div>

</body>
</html>
