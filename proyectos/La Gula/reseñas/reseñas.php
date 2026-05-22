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
    <link rel="stylesheet" href="reseñas.css" />
    <title>Reseñas</title>
  </head>
  <body>
    <header class="main-header">
      <div class="logo">
        <a href="index.php"
          ><img src="/imagenes/logo.png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Reseñas</h1>
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
    <br />
    <br />
    <div class="form-container">
      <p class="title">Reseña</p>
      <form autocomplete="off" action="reseñalogica.php" method="post" class="form">
        <div class="input-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" id="nombre" required /><!--Todo required-->
        </div>
        <div class="input-group">
          <label for="apellido">Apellido:</label>
          <input type="text" name="apellido" id="apellido" required />
        </div>
        <div class="input-group">
          <label for="text">Cuéntanos...</label>
          <textarea name="text" id="text" cols="30" rows="8"></textarea>
        </div>
        <br />
        <!--Sistema de estrellas para puntuar-->
        <div class="rating">
          <input value="5" name="rating" id="star5" type="radio" required /> <!--Required acá, así mínimo toca una estrella-->
          <label for="star5"></label>
          <input value="4" name="rating" id="star4" type="radio" />
          <label for="star4"></label>
          <input value="3" name="rating" id="star3" type="radio" />
          <label for="star3"></label>
          <input value="2" name="rating" id="star2" type="radio" />
          <label for="star2"></label>
          <input value="1" name="rating" id="star1" type="radio" />
          <label for="star1"></label>
        </div>
        <br />
        <button class="sign">Enviar</button>
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
