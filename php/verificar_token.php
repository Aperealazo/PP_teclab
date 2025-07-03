
<?php
session_start();
include("conexion.php");

$datos = json_decode(file_get_contents("php://input"), true);
$token = $datos['token'];

$verificar = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=" . $token);
$info = json_decode($verificar, true);

if (!isset($info['email'])) {
    echo json_encode(["success" => false, "error" => "Token inválido"]);
    exit();
}

$email = $info['email'];
$nombre = $info['name'];
$foto = $info['picture'];

// Buscar usuario en la bd para despeus asignar (ver)
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

if (!$usuario) {
    // Registrar nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, email, foto) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $foto);
    $stmt->execute();
}

$_SESSION['usuario'] = $email;
$_SESSION['nombre'] = $nombre;

if ($usuario && $usuario['tiene_clave']) {
    echo json_encode(["redirect" => "dashboard.php"]);
} else {
    echo json_encode(["redirect" => "crear_clave.php"]);
}
?>
