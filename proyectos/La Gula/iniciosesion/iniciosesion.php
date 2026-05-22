<?php
// Iniciar sesión solo si no hay ninguna activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="iniciosesion.css" />
    <title>Iniciar Sesión</title>
  </head>
  <body>
    <header class="main-header">
      <div class="logo">
        <a href="/index.php"
          ><img src="/imagenes/logo.png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Iniciar Sesión</h1>
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
    echo '<a href="/carritodecompras/carritodecompraslindo.php">Carrito</a>';
}
?> 
  </nav>
    </header>
    <div class="form-container">
      <p class="title">Inicio de Sesión</p>
      <?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<p class="error-mensaje">*Correo o contraseña incorrectos</p>';
    } elseif ($_GET['error'] == 2) {
        echo '<p class="error-mensaje">*No hay usuarios registrados todavía</p>';
    }
}
?>
      <form class="form" action="/iniciosesion/iniciosesionlogica.php" method="post" >
        <div class="input-group">
          <label for="username">Correo Electrónico:</label>
          <input type="email" name="email" id="email" />
        </div>
        <div class="input-group">
          <label for="password">Contraseña:</label>
          <input type="password" name="password" id="password" />
          <!--Enlace para recuperar la contraseña-->
          <div class="forgot">
            <a href="/olvidarcontraseña/olvidarcontraseña.php"
              >¿Olvidaste tu contraseña?</a >
          </div>
        </div>
        <input type="submit" value="Inicia sesion"  class="sign">
      </form>
      <!--Mensaje para usuarios sin cuenta-->
      <p class="signup">
        <!--Enlace a la página de registro-->
        <a href="../registro/registro.php">¿No tienes una cuenta?</a>
      </p>
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
          <p>La Falda, Cordoba</p>
          <p>Calle Sabores 123</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 La Gula. Todos los derechos reservados.</p>
      </div>
    </footer>
  </body>
</html>
