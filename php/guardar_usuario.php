<?php
session_start();
include 'conexion.php'; 

$data = json_decode(file_get_contents("php://input"), true);

$nombre = $data['nombre'];
$email = $data['email'];


$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Insertamos nuevo usuario sin contraseña
    $sql_insert = "INSERT INTO usuarios (nombre, email) VALUES (?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("ss", $nombre, $email);
    $stmt_insert->execute();

    $_SESSION['usuario'] = $email;
    echo json_encode(['redirect' => 'crear_contrasena.php']);
} else {
    $usuario = $result->fetch_assoc();
    $_SESSION['usuario'] = $usuario['email'];

    if (empty($usuario['password'])) {
        echo json_encode(['redirect' => 'crear_contrasena.php']);
    } else {
        echo json_encode(['redirect' => 'dashboard.php']);
    }
}

$conn->close();
?>
