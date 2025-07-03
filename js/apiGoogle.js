function handleCredentialResponse(response) {
  const data = {
    token: response.credential
  };

  fetch("registro_usuario.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "ok") {
      window.location.href = "dashboard.php";
    } else if (data.status === "set_password") {
      let password = prompt("¡Hola " + data.nombre + "! Por favor, creá una contraseña para tu próxima visita:");
      if (password) {
        fetch("registro_usuario.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ set_password: true, email: data.email, password })
        }).then(() => {
          alert("Contraseña guardada. Serás redirigido...");
          window.location.href = "dashboard.php";
        });
      }
    } else {
      alert("Error al iniciar sesión.");
    }
  });
}
