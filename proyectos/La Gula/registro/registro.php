<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="registro.css" />
    <title>Registrarse</title>
  </head>
  <body>
    <header class="main-header">
      <div class="logo">
        <a href="/index.php"
          ><img src="/imagenes/logo.png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Registro</h1>
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
} else {
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
    
}
?> 
  </nav>
    </header>
    <div class="form-container">
      <p class="title">Registrarse</p>
      <form class="form" action="registrologica.php" method="post">
        <div class="input-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" id="nombre" required />
        </div>
        <div class="input-group">
          <label for="apellido">Apellido:</label>
          <input type="text" name="apellido" id="apellido" required />
        </div>
        <div class="input-group">
          <label for="cumpleaños">Fecha de Nacimiento:</label>
          <input
            type="date"
            name="fecha_nacimiento"
            id="fecha_nacimiento"
            required
          />
        </div>
        <div class="input-group">
          <label for="correo">Correo Electrónico:</label>
          <input type="email" name="correo" id="correo" required />
        </div>
        <div class="input-group">
          <label for="contraseña">Contraseña:</label>
          <input type="password" name="password" id="password" required />
        </div>
        <br />
        <button type="submit" class="sign">Registrarse</button>
      </form>
      <p class="signup">
        <!--Mensaje por si ya tenés una cuenta-->
        <a href="../iniciosesion/iniciosesion.php">¿Ya tienes una cuenta?</a>
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
