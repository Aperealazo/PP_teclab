<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear Curso</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/barra.css">
  <link rel="stylesheet" href="../css/formulario-Estilos.css">
</head>
<body>

<!-- Sidebar o nav? preguntarle a pablo-->
<div class="sidebar">
  <h2>Mi Aula</h2>
  <a href="crear_cursos.php" class="active"><i class="bi bi-journal-plus me-2"></i>Crear Curso</a>
  <a href="alumnos.php"><i class="bi bi-people me-2"></i>Agregar Alumnos</a>
  <a href="notas.php"><i class="bi bi-pencil-square me-2"></i>Gestionar Notas</a>
  <a href="asistencia.php"><i class="bi bi-calendar-check me-2"></i>Gestionar Asistencia</a>
</div>

  <div class="form-wrapper">
    <h3><i class="bi bi-journal-plus me-2"></i>Crear Curso</h3>

    <div class="alert alert-warning alert-custom">
      Por favor, agrega una descripción clara del curso para que sea más fácil de identificar. ✍️
    </div>

    <form>
      <div class="mb-3">
        <label for="nombre">Nombre del Curso</label>
        <input type="text" id="nombre" class="form-control" placeholder="Ej: Programación" required>
      </div>

      <div class="mb-3">
        <label for="anio">Año</label>
        <select id="anio" class="form-select" required>
          <option value="" disabled selected>Seleccione el año</option>
          <option value="1">1°</option>
          <option value="2">2°</option>
          <option value="3">3°</option>
          <option value="4">4°</option>
          <option value="5">5°</option>
          <option value="6">6°</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="division">División</label>
        <select id="division" class="form-select" required>
          <option value="1ra">1ra</option>
          <option value="2da">2da</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" class="form-control" rows="3" placeholder="Descripción del curso" required></textarea>
      </div>

      <button type="submit" class="btn btn-crear">Crear Curso</button>
    </form>
  </div>

</body>
</html>
