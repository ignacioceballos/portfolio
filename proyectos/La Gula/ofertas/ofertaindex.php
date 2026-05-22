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
    <link rel="stylesheet" href="ofertas.css" />
    <title>Ofertas</title>
  </head>
  <body>
    <!--GEADER-->
    <header class="main-header">
      <div class="logo">
        <a href="/index.php"
          ><img src="/imagenes/logo.png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Ofertas</h1>
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

    <!-- Contenedor alineado a la izquierda -->
    <p class="title">Ofertas del día:</p>
    <br />
    <div style="margin-left: 80px; display: inline-block; text-align: center">
      <a href="oferta1.php">
  <img
    class="ofertas"
    src="/imagenes/pato.jpg"
    alt="Magret de Pato"
  />
</a>
      <div class="descripcion">
        <h4>Magret de Pato Rosado</h4>
        <br />
        <h4>Puré Trufado y</h4>
        <br />
        <h4>Coulis de Frutos Rojos</h4>
      </div>
    </div>
    <div style="margin-left: 80px; display: inline-block; text-align: center">
      <a href="oferta2.php">
  <img
    class="ofertas"
    src="/imagenes/p2.jpg"
    alt="Costillas BBQ"
  />
      <div class="descripcion">
        <h4>Costillas en su punto</h4>
        <br />
        <h4>con Guarnición</h4>
        <br />
        <h4>de Temporada</h4>
      </div>
    </div>
    <div style="margin-left: 80px; display: inline-block; text-align: center">
      <a href="oferta3.php">
  <img
    class="ofertas"
    src="/imagenes/promo3.jpg"
    alt="Pollo con Risotto"
  />
      <div class="descripcion">
        <h4>Pechuga rellena con</h4>
        <br />
        <h4>Reducción Balsámica</h4>
        <br />
        <h4>y Risotto Dorado</h4>
      </div>
    </div>
    <div style="margin-left: 80px; display: inline-block; text-align: center">
      <a href="oferta4.php">
  <img
    class="ofertas"
    src="/imagenes/ofertaposta3.jpg"
    alt="Fetccine"
  />
      <div class="descripcion">
        <h4>Fetuccine al Nero</h4>
        <br />
        <h4>con Tentáculos</h4>
        <br />
        <h4>a la Plancha</h4>
      </div>
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
