<?php
require "conexion.php";

$data = json_decode(file_get_contents("php://input"), true);

// Verificar y registrar usuario si viene con token
if (isset($data['token'])) {
    $token = $data['token'];
    $parts = explode('.', $token);
    $payload = json_decode(base64_decode($parts[1]), true);

    $nombre = $conn->real_escape_string($payload['name']);
    $email = $conn->real_escape_string($payload['email']);

    $check = $conn->query("SELECT * FROM usuarios WHERE email='$email'");
    if ($check->num_rows === 0) {
        $conn->query("INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')");
        echo json_encode(["status" => "set_password", "email" => $email, "nombre" => $nombre]);
    } else {
        echo json_encode(["status" => "ok"]);
    }
    exit;
}

// Si está seteando una contraseña
if (isset($data['set_password']) && $data['set_password']) {
    $email = $conn->real_escape_string($data['email']);
    $pass = password_hash($data['password'], PASSWORD_DEFAULT);
    $conn->query("UPDATE usuarios SET password='$pass' WHERE email='$email'");
    echo json_encode(["status" => "password_set"]);
    exit;
}
?>
