<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestionar Notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #F4F6F8;
      padding: 40px;
    }

    .container-notas {
      background-color: #fff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .form-select, .form-control {
      border-radius: 10px;
    }

    .btn-guardar {
      background-color: #27AE60;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 500;
      color: white;
    }

    .btn-guardar:hover {
      background-color: #219150;
    }
  </style>
</head>
<body>

<div class="container container-notas">
  <h3 class="mb-4"><i class="bi bi-pencil-square me-2"></i>Gestionar Notas</h3>

  <!-- Selector de curso -->
  <div class="mb-4">
    <label for="cursoSelect" class="form-label">Curso</label>
    <select id="cursoSelect" class="form-select">
      <option disabled selected>Seleccione un curso</option>
      <option value="1">Programación – 5° 1ra</option>
      <option value="2">Base de Datos – 6° 2da</option>
    </select>
  </div>

  <!-- Tabla de notas -->
  <div class="table-responsive">
    <table class="table table-striped align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Apellido y Nombre</th>
          <th>Nota 1</th>
          <th>Nota 2</th>
          <th>Nota 3</th>
          <th>Promedio</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Ejemplo visual -->
        <tr>
          <td>González María</td>
          <td><input type="number" class="form-control" min="1" max="10" value="8"></td>
          <td><input type="number" class="form-control" min="1" max="10" value="7"></td>
          <td><input type="number" class="form-control" min="1" max="10" value="9"></td>
          <td><strong>8.0</strong></td>
          <td><button class="btn btn-sm btn-outline-primary"><i class="bi bi-save"></i></button></td>
        </tr>
        <tr>
          <td>Pérez Juan</td>
          <td><input type="number" class="form-control" min="1" max="10" value="5"></td>
          <td><input type="number" class="form-control" min="1" max="10" value="6"></td>
          <td><input type="number" class="form-control" min="1" max="10" value="7"></td>
          <td><strong>6.0</strong></td>
          <td><button class="btn btn-sm btn-outline-primary"><i class="bi bi-save"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="text-end mt-3">
    <button class="btn btn-guardar"><i class="bi bi-cloud-upload me-2"></i>Guardar todos los cambios</button>
  </div>
</div>

</body>
</html>
