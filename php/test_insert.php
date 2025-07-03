<?php
include("conexion.php");

// Datos de prueba
$nombre = "Test Usuario";
$email = "test@example.com";
$foto = "https://example.com/foto.png";

// Preparar consulta
$sql = "INSERT INTO usuarios (nombre, email, foto) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Verificar preparación
if (!$stmt) {
    die("Error al preparar la consulta: " . $conn->error);
}

// Bindear parámetros
$stmt->bind_param("sss", $nombre, $email, $foto);

// Ejecutar
if ($stmt->execute()) {
    echo "✅ Inserción exitosa.";
} else {
    echo "❌ Error al insertar: " . $stmt->error;
}
?>
