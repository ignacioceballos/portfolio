<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Siempre vaciar al entrar
$_SESSION['carrito'] = [];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="carritodecompras.css" />
    <title>Finalizar Compra</title>
  </head>
  <body>
    <header class="main-header">
      <div class="logo">
        <a href="/index.php"
          ><img src="/imagenes/logo.png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Finalizar Compra</h1>
          <p>La Gula</p>
        </div>
      </div>

      <nav class="nav-bar">
    <a href="/carta/carta.php">Carta</a>
    <a href="/index.php#historia">Historia</a>
          <?php
if (!empty($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"])) {
    echo '<a href="/perfil/perfil.php">Perfil</a>';
    echo '<a href="/ofertas/ofertaindex.php">Ofertas</a>';
    echo '<a href="/reseñas/reseñas.php">Reseñas</a>';
    echo '<a href="/reserva/reservas.php">Reserva</a>';
} else {
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
    
}
?> 
  </nav>
    </header>
    <br />
    <br />
    <div class="form-container">
      <p class="title">Finalizar Compra</p>
      <form action="carritodecompraslindo.php" class="form">
        <div class="input-group">
          <h1>¡Gracias por tu compra!</h1>
          <h2>¡Esperamos volver a verte pronto!</h2>
        </div>
        <br />
        <button class="sign">Volver</button>
        <br />
      </form>
    </div>
    <footer class="main-footer">
  <div class="footer-content">
    <div class="footer-section">
          <h3>Redes Sociales</h3>
          <div class="redes-sociales">
            <p>📸 Instagram: @LaGulaRestaurant</p>
            <p>📘 Facebook: Restaurante La Gula</p>
            <p>🐦 Twitter: @LaGulaRestaurant</p>
          </div>
        </div>

    <div class="footer-section">
      <h3>Contacto</h3>
      <p>Correo: lagula@restaurante.com</p>
      <p>Teléfono: +34 123 456 789</p>
    </div>

    <div class="footer-section">
      <h3>Ubicación</h3>
      <p>La Falda, Cordoba </p>
      <p>Calle Sabores 123</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 La Gula. Todos los derechos reservados.</p>
  </div>
</footer>
  </body>
</html>
