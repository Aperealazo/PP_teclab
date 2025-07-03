<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}

$email = $_SESSION['usuario'];
$clave = $_POST['clave'];
$clave_hash = password_hash($clave, PASSWORD_DEFAULT); // 🔐 Hash seguro

$sql = "UPDATE usuarios SET password = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $clave_hash, $email);

if ($stmt->execute()) {
    header("Location: dashboard.php");
} else {
    echo "Error al guardar la contraseña";
}

$conn->close();
?>
