<?php
require "conexion.php";

$email = $_POST['email'];
$pass = $_POST['password'];

$query = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($pass, $user['password'])) {
        session_start();
        $_SESSION['usuario'] = $user['nombre'];
        header("Location: dashboard.php");
        exit;
    }
}

echo "Correo o contraseña incorrectos.";
?>
