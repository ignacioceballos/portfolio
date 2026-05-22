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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ofertitas.css" />
    <title>Oferta: Pollo Relleno con Risotto</title>
  </head>
  <header class="main-header">
    <div class="logo">
      <a href="/ofertas/ofertaindex.php">
        <img src="/imagenes/logo.png" alt="Ofertas" />
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
  <body>
    <form
      method="post"
      action="/carritodecompras/carritodecompras.php"
      style="text-align: center"
    >
      <br />
    <img id="principal" src="/imagenes/promo3.jpg" alt="" />
    <br />
    <br />
    <div class="descripcion">
      <h1>Pollo Relleno, con Risotto</h1>
      <h1>27.000$</h1>
      <h3>
        Tierna y jugosa pechuga de pollo, acompañada de un suave Risotto,
      </h3>
      <h3>
        deliciosa salsa de soja y rábanos cosechados de huerta,
      </h3>
      <h3>
        para poder realzar ese sabor deseado por cualquier Dios.
      </h3>
    </div>
      <!-- DATOS DEL PRODUCTO -->
      <input type="hidden" name="id" value="3" />
      <input type="hidden" name="nombre" value="Pollo Relleno con Risotto" />
      <input type="hidden" name="precio" value="27000" />

      <!-- BOTÓN -->
      <button type="submit" name="agregar" class="button-oscuro">
        🛒 Agregar al carrito
      </button>
    </form>
    
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
