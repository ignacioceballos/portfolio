<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/registro/registro.css">
    <title>Document</title>
</head>
<body>
     <header class="main-header">
      <div class="logo">
        <a href="/index/index.php"
          ><img src="/imagenes/ChatGPT Image 18 oct 2025, 12_46_26 a.m..png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Registro</h1>
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