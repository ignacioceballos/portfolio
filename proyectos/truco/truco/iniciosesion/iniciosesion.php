<?php
// Iniciar sesión solo si no hay ninguna activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/iniciosesion/iniciosesion.css">
    <title>Document</title>
</head>
<body>
    <header class="main-header">
      <div class="logo">
        <a href="/index/index.php"
          ><img src="/imagenes/ChatGPT Image 18 oct 2025, 12_46_26 a.m..png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Iniciar Sesión</h1>
          <p>Truk.io</p>
        </div>
      </div>
      <nav class="nav-bar">
     <a href="/reglas/reglas.php">Reglas</a>
    <a href="#historia">Historia</a> <!--lleva a la misma página-->
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
    <br>
    <br>
    <br>
    <br>
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
    <br>
    <br>
    <br>
    <br>
    <br>

    <!--Footer hermoso-->
     <footer class="main-footer">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Redes Sociales</h3><!--Apartado de redes sociales-->
          <div class="redes-sociales">
            <p>📸 Instagram: @Truk.io</p>
            <p>📘 Facebook: Truk.io</p>
            <p>🐦 Twitter: @Truk.io</p>
          </div>
        </div>
   
        <div class="footer-section"><!--Contacto-->
          <h3>Contacto</h3>
          <p>Correo: Truk.io@gmail.com.ar</p>
          <p>Teléfono: +54 3548 23 40 15</p>
        </div>

        <div class="footer-section"><!--Ubicación-->
          <h3>Ubicación</h3>
          <p>Argentina</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 Truk.io. Todos los derechos reservados.</p>
      </div>
    </footer>
    </div>
</body>
</html>