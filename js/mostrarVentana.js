
  document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault(); // Evita que recargue la página
    window.location.href = "dashboard.html"; // Redirige
  });
